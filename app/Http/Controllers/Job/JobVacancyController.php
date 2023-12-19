<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Applicants;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Vacancies;
use App\Models\ContactInformation;
use App\Models\Educations;
use Illuminate\Http\Request;


class JobVacancyController extends Controller
{
    public function index(){
        $data = null;
        if (Auth::check()) {
            $data = Profile::where('userid', '=', Auth::user()->userid)->first();
        }

        $vacancies = Vacancies::where('status', '=', '1')->paginate(21); // Display 9 vacancies per page
        
        $contactInfo = ContactInformation::first();


        return view('job.jobVacancy', compact('data', 'contactInfo', 'vacancies'));
    }



    public function apply(Request $request, $id)
{
    // Find the vacancy by ID
    $vacancy = Vacancies::findOrFail($id);

    $data = Profile::where('userid', '=', Auth::user()->userid)->first();
    $edu = Educations::where('userid', '=', Auth::user()->userid)->max('value');
    $value = 0;



    if($data->state_id == $vacancy->reqState){
        $value++;
    }
    if($data->city_id == $vacancy->reqCity){
        $value++;
    }
    if ($edu > $vacancy->reqDegree){
        $value += $edu - $vacancy->reqDegree;
    }




    // Create a new applicant
    $applicant = new Applicants([
        'userid' => Auth::id(), // Using Auth::id() to get authenticated user's ID
        'id_vacancy' => $vacancy->id_vacancy,
        'value' => $value,
    ]);


    // Save the applicant's record
    $applicant->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Application submitted successfully.');
}
}
