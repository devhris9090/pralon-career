<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use App\Models\Experiences;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller{
    public function index()
    {
        $data = null;
        $experiences = [];

        if (Auth::check()) {
            $user = Auth::user();
            $data = Profile::where('userid', '=', $user->userid)->first();
            $experiences = Experiences::where('userid', '=', $user->userid)->get();
        }

        $contactInfo = ContactInformation::first();
        $pageTitle = "Experience";

        return view('userProfile.experience', compact('contactInfo', 'data', 'experiences', 'pageTitle'));
    }


    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'companyName' => 'required',
            'companyAddress' => 'required',
            'yosStartMonth' => 'required',
            'yosStartYear' => 'required',
            'posStart' => 'required',
            'posEnd' => 'required',
            'jobDesc' => 'required',
            'project' => 'required',
            'salaryStart' => 'required|numeric',
            'salaryEnd' => 'required|numeric',
            'benefit' => 'required',
            'leavingReason' => 'required',
            'yosEndMonth' => $request->has('yosPresent') ? [] : ['required'],
            'yosEndYear' => $request->has('yosPresent') ? [] : ['required', 'numeric', function ($attribute, $value, $fail) use ($request) {
                $yosStartYear = (int)$request->yosStartYear;
                $yosEndYear = (int)$value;
            
                if ($yosEndYear < $yosStartYear) {
                    $fail('Please check your Years of Services months and Years.');
                } else if ($yosEndYear === $yosStartYear) {
                    $yosStartMonth = (int)$request->yosStartMonth;
                    $yosEndMonth = (int)$request->yosEndMonth;
            
                    if ($yosEndMonth < $yosStartMonth) {
                        $fail('Please check your Years of Services months and Years.');
                    }
                }
            }],
        ],[
            'salaryStart.numeric' => 'The salary start must be a number and without "," or "." ',
            'salaryEnd.numeric' => 'The salary end must be a number and without "," or "." ',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('showAddModal', true);
        }

        

        $experience=new Experiences();
        $user = Auth::user(); // Get the authenticated user object


        $experience->userid = $user->userid;
        $experience->companyName = $request->companyName;
        $experience->companyAddress = $request->companyAddress;
        $yosStartMonth = $request->yosStartMonth;
        $yosStartYear = $request->yosStartYear;
        $yosPresent = $request->has('yosPresent') ? 1 : 0;


        $yosEndMonth = ($yosPresent == 1) ? '01' : $request->yosEndMonth;
        $yosEndYear = ($yosPresent == 1) ? '0001' : $request->yosEndYear;
        $experience->yosStart = $yosStartYear . '-' . $yosStartMonth . '-01';
        $experience->yosEnd = $yosEndYear . '-' . $yosEndMonth . '-01';

        $experience->posStart = $request->posStart;
        $experience->posEnd = $request->posEnd;
        $experience->jobDesc = $request->jobDesc;
        $experience->project = $request->project;
        $experience->salaryStart = $request->salaryStart;
        $experience->salaryEnd = $request->salaryEnd;
        $experience->benefit = $request->benefit;
        $experience->leavingReason = $request->leavingReason;
        
        $experience->save();
        return redirect()->back()->with('success', 'Experience added successfully.');
    }


    public function edit(Request $request, $id)
    { 
        $experience = Experiences::find($id);
        
        // Check if the experience exists
        if (!$experience) {
            return redirect()->back()->with('fail', 'Experience not found.');
        }

        $validator = Validator::make($request->all(), [
            'edit_companyName' => 'required',
            'edit_companyAddress' => 'required',
            'edit_yosStartMonth' => 'required',
            'edit_yosStartYear' => 'required',
            'edit_posStart' => 'required',
            'edit_posEnd' => 'required',
            'edit_jobDesc' => 'required',
            'edit_project' => 'required',
            'edit_salaryStart' => 'required|numeric',
            'edit_salaryEnd' => 'required|numeric',
            'edit_benefit' => 'required',
            'edit_leavingReason' => 'required',
            'edit_yosEndMonth' => $request->has('edit_yosPresent') ? [] : ['required'],
            'edit_yosEndYear' => $request->has('edit_yosPresent') ? [] : ['required', 'numeric', function ($attribute, $value, $fail) use ($request) {
                $yosStartYear = (int)$request->edit_yosStartYear;
                $yosEndYear = (int)$value;
            
                if ($yosEndYear < $yosStartYear) {
                    $fail('Please check your Years of Services months and Years.');
                } else if ($yosEndYear === $yosStartYear) {
                    $yosStartMonth = (int)$request->edit_yosStartYear;
                    $yosEndMonth = (int)$request->edit_yosEndYear;
            
                    if ($yosEndMonth < $yosStartMonth) {
                        $fail('Please check your Years of Services months and Years.');
                    }
                }
            }],
        ],[
            'edit_salaryStart.numeric' => 'The salary start must be a number and without "," or "." ',
            'edit_salaryEnd.numeric' => 'The salary end must be a number and without "," or "." ',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('showEditModal', true)
                ->with('editExperienceId', $id); // Use $id instead of $request->experience_id
        }
        

        // Update the experience attributes based on the request data
        $experience->companyName = $request->input('edit_companyName');
        $experience->companyAddress = $request->input('edit_companyAddress');
        $yosStartMonth = $request->input('edit_yosStartMonth');
        $yosStartYear = $request->input('edit_yosStartYear');
        $yosPresent = $request->has('edit_yosPresent') ? 1 : 0;

        $yosEndMonth = ($yosPresent == 1) ? '01' : $request->input('edit_yosEndMonth');
        $yosEndYear = ($yosPresent == 1) ? '0001' : $request->input('edit_yosEndYear');
        $experience->yosStart = $yosStartYear . '-' . $yosStartMonth . '-01';
        $experience->yosEnd = $yosEndYear . '-' . $yosEndMonth . '-01';

        $experience->posStart = $request->input('edit_posStart');
        $experience->posEnd = $request->input('edit_posEnd');
        $experience->jobDesc = $request->input('edit_jobDesc');
        $experience->project = $request->input('edit_project');
        $experience->salaryStart = $request->input('edit_salaryStart');
        $experience->salaryEnd = $request->input('edit_salaryEnd');
        $experience->benefit = $request->input('edit_benefit');
        $experience->leavingReason = $request->input('edit_leavingReason');
        // ... update other attributes accordingly

        // Save the changes
        $experience->save();
        

        return redirect()->back()
            ->with('success', 'Experience updated successfully.');
    }


    public function delete($id)
    {
        $experience = Experiences::find($id);
    
        if (!$experience) {
            return redirect()->back()->with('fail', 'Experience not found.');
        }
    
        // Perform the delete operation
        $experience->delete();
    
        return redirect()->back()->with('success', 'Experience deleted successfully.');
    }

}
     