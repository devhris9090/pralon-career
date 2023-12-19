<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use App\Models\Profile;
use App\Models\TrainingAchievements;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TrachController extends Controller
{
    public function index(Request $request)
    {
        $data = null;
        $trachs = [];

        $contactInfo = ContactInformation::first();

        if (Auth::check()) {
            $user = Auth::user();
            $data = Profile::where('userid', '=', $user->userid)->first();
            
            // Get all training achievements for the user
            $trachs = TrainingAchievements::where('userid', '=', $user->userid);

            // Filter by category if a category is selected
            if ($request->has('category') && $request->category !== 'All') {
                $category = $request->input('category');
                $trachs->where('trachCategory', $category);
            }

            $trachs = $trachs->get();
            $pageTitle = "Training & Achievement"; // This can be dynamic based on the page you're on

        }

        return view('userProfile.TrainingAchievement', compact('contactInfo', 'data', 'trachs', 'request', 'pageTitle'));
    }


    public function add(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'trachName'=>'required',
            'trachOrganizer'=>'required',
            'trachCategory'=>'required',
            'trachStart'=>'required',
            'trachEnd'=>'required',
        ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput()->with('showAddModal', true);
            }

        $trachs = new TrainingAchievements();
        $user   = Auth::user();


        $trachs->userid                 = $user->userid;
        $trachs->trachName              = $request->trachName; 
        $trachs->trachOrganizer         = $request->trachOrganizer;
        $trachs->trachCategory          = $request->trachCategory;
        $trachs->trachDetail            = $request->trachDetail;
        $trachs->trachStart             = $request->trachStart; // Use the formatted date
        $trachs->trachEnd               = $request->trachEnd; // Use the formatted date


        $trachs->save();
        return redirect()->back()->with('success', 'Training or Achievement added successfully.');
    }


    public function edit(Request $request, $id)
    {

        $trachs = TrainingAchievements::find($id);
         if (!$trachs) {
            return redirect()->back()->with('fail', 'Training or Achievement not found.');
        }
        $validator = Validator::make($request->all(),[
            'trachName'=>'required',
            'trachOrganizer'=>'required',
            'trachCategory'=>'required',
            'trachDetail' => 'required',
            'trachStart'=>'required',
            'trachEnd'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('showEditModal', true)
                ->with('editTrachId', $id); 
        }


        $formattedDate = Carbon::createFromFormat('d-m-Y', $request->input('trachDate'))->format('Y-m-d');

        $trachs->trachName           = $request->input('trachName');
        $trachs->trachOrganizer      = $request->input('trachOrganizer');
        $trachs->trachCategory       = $request->input('trachCategory');
        $trachs->trachDetail         = $request->input('trachDetail');
        $trachs->trachDate           = $formattedDate; // Use the formatted date


        $trachs->save();
        return redirect()->back()->with('success', 'Training or Achievement updated successfully.');
    }



    public function delete($id)
    {
        $trachs = TrainingAchievements::find($id);
    
        if (!$trachs) {
            return redirect()->back()->with('fail', 'Training and Achievement not found.');
        }
    
        // Perform the delete operation
        $trachs->delete();
    
        return redirect()->back()->with('success', 'Training or Achievement deleted successfully.');
    }
}
