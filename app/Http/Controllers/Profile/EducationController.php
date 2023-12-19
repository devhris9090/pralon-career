<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use App\Models\Degrees;
use App\Models\Educations;
use App\Models\Institutions;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    public function index()
    {
        
        $data = null;
        $educations = [];
        if (Auth::check()) {
            $user = Auth::user();
            $data = Profile::where('userid', '=', $user->userid)->first();
            $educations = collect(Educations::where('userid', '=', $user->userid)
            ->where(function ($query) {
                $query->Where('startYear', '<=', Carbon::today()->toDateString());
            })
            ->orderBy('startYear')
            ->get());

            $degrees = Degrees::all();
        }


        $institutions = Institutions::where('institutionName', 'like', "%$degrees%")
        ->orderBy('institutionName')
        ->get();
        $contactInfo = ContactInformation::first();
        $pageTitle = "Education"; // This can be dynamic based on the page you're on


        return view('userProfile.education',compact('contactInfo', 'data', 'educations', 'institutions', 'pageTitle', 'degrees'));
        
    }

    public function getInstitutions($degrees)
    {
        // Adjust this query based on your database structure
        $institutions = Institutions::where('institutionName', 'like', "%$degrees%")
        ->orderBy('institutionName')
        ->get();
        return response()->json($institutions);
    }


    public function add(Request $request)
    {

        
        
       

        $validator = Validator::make($request->all(),[
            'institutionName'=>'required',
            'degree'=>'required',
            'major' => ($request->degree == 'SD' || $request->degree == 'SMP') ? 'nullable' : 'required',
            'educationStartYear'=>'required',
            'educationEndYear' => 'required|after:educationStartYear',
        ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput()->with('showAddModal', true);
            }

        $educations = new Educations();
        $user = Auth::user(); // Get the authenticated user object

        $educations->userid             = $user->userid;
        $educations->institutionName    = $request->institutionName;

        $degreeId = $request->degree;
        $degrees = Degrees::where('id', $degreeId)->first();
        $educations->degree = $degrees->edu_name;
        $educations->value = $degrees->value;

        $educations->major              = $request->major;

        $educationStartYear             = $request->educationStartYear;
        $educationEndYear               = $request->educationEndYear;
        $educations->startYear          = $educationStartYear . '-01' . '-01';
        $educations->endYear            = $educationEndYear . '-01' . '-01';

        $educations->achievement        = $request->achievement;


        $educations->save();
        return redirect()->back()->with('success', 'Education added successfully.');

        
    }



    public function edit(Request $request, $id)
    {


        $educations = educations::find($id);
         // Check if the experience exists
         if (!$educations) {
            return redirect()->back()->with('fail', 'Education not found.');
        }

        
        $validator = Validator::make($request->all(),[
            'edit_institutionName'=>'required',
            'edit_degree'=>'required',
            'edit_major' => ($request->edit_degree == 'SD' || $request->edit_degree == 'SMP') ? 'nullable' : 'required',
            'edit_educationStartYear' => 'required',
            'edit_educationEndYear' => 'required|gte:edit_educationStartYear',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('showEditModal', true)
                ->with('editEducationId', $id); 
        }

        // Update the education record
        $educations->institutionName    = $request->input('edit_institutionName');

        $degreeId = $request->input('edit_degree');
        $degrees = Degrees::where('id', $degreeId)->first();
        $educations->degree = $degrees->edu_name;
        $educations->value = $degrees->value;
        
        $educations->major              = $request->input('edit_major');

        $educationStartYear             = $request->input('edit_educationStartYear');
        $educationEndYear               = $request->input('edit_educationEndYear');
        $educations->startYear          = $educationStartYear . '-01' . '-01';
        $educations->endYear            = $educationEndYear . '-01' . '-01';

        $educations->achievement        = $request->input('edit_achievement');
        // Update other fields as needed
        $educations->save();
        return redirect()->back()->with('success', 'Education updated successfully.');
    
    }

    public function delete($id)
    {
        $educations = educations::find($id);
    
        if (!$educations) {
            return redirect()->back()->with('fail', 'Education not found.');
        }
    
        // Perform the delete operation
        $educations->delete();
    
        return redirect()->back()->with('success', 'Education deleted successfully.');
    }


    public function searchInstitutions(Request $request)
    {
        $query = $request->input('query');
        
        // Perform the search query to fetch matching institutions
        $institutions = Institutions::where('institutionName', 'LIKE', "%$query%")->get();
        
        // Return the matching institutions as a JSON response
        return response()->json($institutions);
    }

}
