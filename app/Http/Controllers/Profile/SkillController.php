<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use App\Models\Profile;
use App\Models\SkillCategories;
use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SkillController extends Controller
{
    public function index(Request $request)
    {
        $data = null;
        $skills = [];
        $categories = SkillCategories::all();
        $contactInfo = ContactInformation::first();

        if (Auth::check()) {
            $user = Auth::user();
            $data = Profile::where('userid', '=', $user->userid)->first();
            $skillsQuery = Skills::where('userid', '=', $user->userid);

            // Filter by category if a category is selected
            if ($request->has('category') && $request->category !== 'All') {
                $category = $request->input('category');
                $skillsQuery->where('skillCategory', $category);
            }

            $skills = $skillsQuery->latest()->get();
            $pageTitle = "Skill"; // This can be dynamic based on the page you're on

        }

        return view('userProfile.skill', compact('contactInfo', 'data', 'skills', 'categories', 'request', 'pageTitle'));
    }


    public function add(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'skillName'=>'required',
            'skillCategory'=>'required',
            'skillValue' => 'required',
            'skillFrom'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('showAddModal', true);
        }

        $skills                     = new Skills();
        $user                       = Auth::user();

        $skills->userid             = $user->userid;
        $skills->skillName          = $request->skillName;
        $skills->skillCategory      = $request->skillCategory;
        $skills->skillValue         = $request->skillValue;
        $skills->skillFrom          = $request->skillFrom;


        $skills->save();
        return redirect()->back()->with('success', 'Skill added successfully.');
    }


    public function edit(Request $request, $id)
    {

        $skills = Skills::find($id);
         // Check if the experience exists
         if (!$skills) {
            return redirect()->back()->with('fail', 'Experience not found.');
        }
        $validator = Validator::make($request->all(),[
            'skillName'=>'required',
            'skillCategory'=>'required',
            'skillValue' => 'required',
            'skillFrom'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('showEditModal', true)
                ->with('editSkillId', $id); 
        }


        $skills->skillName          = $request->input('skillName');
        $skills->skillCategory      = $request->input('skillCategory');
        $skills->skillValue         = $request->input('skillValue');
        $skills->skillFrom          = $request->input('skillFrom');


        $skills->save();
        return redirect()->back()->with('success', 'Skill updated successfully.');
    }

    public function delete($id)
    {
        $Skills = Skills::find($id);
    
        if (!$Skills) {
            return redirect()->back()->with('fail', 'Skill not found.');
        }
    
        // Perform the delete operation
        $Skills->delete();
    
        return redirect()->back()->with('success', 'Skill deleted successfully.');
    }
}
