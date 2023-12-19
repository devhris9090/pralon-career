<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use App\Models\Families;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FamilyController extends Controller
{
    public function index()
    {
        
        $data = null;
        $families = [];
        if (Auth::check()) {
            $user = Auth::user();
            $data = Profile::where('userid', '=', $user->userid)->first();
            $families = collect(Families::where('userid', '=', $user->userid)
            ->get());
        }

        $contactInfo = ContactInformation::first();
        $pageTitle = "Family"; // This can be dynamic based on the page you're on


        return view('userProfile.family',compact('contactInfo', 'data', 'families', 'pageTitle'));
        
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(),[
        'familyName'=>'required',
        'relationship'=>'required',
        'age'=>'required',
        'occupation'=>'required',
        'status'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('showAddModal', true);
        }

        $families                       = new Families();
        $user                           = Auth::user();

        $families->userid               = $user->userid;
        $families->familyName           = $request->familyName;
        $families->familyRelation       = $request->relationship;
        $families->age                  = $request->age;
        $families->occupation           = $request->occupation;
        $families->status               = $request->status;


        $families->save();
        return redirect()->back()->with('success', 'Family added successfully.');
    }


    public function edit(Request $request, $id )
    {

        $families = Families::find($id);
         // Check if the experience exists
         if (!$families) {
            return redirect()->back()->with('fail', 'Family not found.');
        }

        $validator = Validator::make($request->all(),[
        'familyName'=>'required',
        'relationship'=>'required',
        'age'=>'required',
        'occupation'=>'required',
        'status'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('showEditModal', true)
                ->with('editFamilyId', $id); 
        }


        $families->familyName           = $request->input('familyName');
        $families->familyRelation       = $request->input('relationship');
        $families->age                  = $request->input('age');
        $families->occupation           = $request->input('occupation');
        $families->status               = $request->input('status');


        $families->save();
        return redirect()->back()->with('success', 'Family updated successfully.');
    }



    public function delete($id)
    {
        $families = Families::find($id);
    
        if (!$families) {
            return redirect()->back()->with('fail', 'Family not found.');
        }
    
        // Perform the delete operation
        $families->delete();
    
        return redirect()->back()->with('success', 'Family deleted successfully.');
    }


}
