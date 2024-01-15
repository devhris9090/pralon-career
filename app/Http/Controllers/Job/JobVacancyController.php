<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Applicants;
use App\Models\Families;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Vacancies;
use App\Models\ContactInformation;
use App\Models\Educations;
use App\Models\Experiences;
use App\Models\Skills;
use App\Models\TrainingAchievements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobVacancyController extends Controller
{
    public function index(){
        $data = null;
        if (Auth::user()) {
            $data = Profile::where('userid', '=', Auth::user()->userid)->first();
            $family = Families::where('userid', '=', Auth::user()->userid)->first();
            $experience = Experiences::where('userid', '=', Auth::user()->userid)->first();
            $skill = Skills::where('userid', '=', Auth::user()->userid)->first();
            $trach = TrainingAchievements::where('userid', '=', Auth::user()->userid)->first();
            $edu = Educations::where('userid', '=', Auth::user()->userid)->first();

        $user_id = Auth::user()->userid;
        $sub_query = "(SELECT 'applied' FROM pralonco_career.employer_applicant
        WHERE userid =".Auth::user()->userid." and id_vacancy = a.id_vacancy) as applied";
        $vacancies = DB::table('company_vacancy AS a')
                    ->select('a.id_vacancy','a.vacancy_name','a.company_name','a.banner','a.status','a.vacancy_detail','a.reqDegree', 'a.reqMajor')
                    ->addSelect(DB::raw('(SELECT "disabled" FROM pralonco_career.employer_applicant
                    WHERE userid = '."'$user_id'".' and id_vacancy = a.id_vacancy) as disabled'))->paginate(21);

        $contactInfo = ContactInformation::first();

        return view('job.jobVacancy', compact('data', 'contactInfo', 'vacancies', 'family', 'experience', 'skill', 'trach', 'edu'));
            // $user_id = Auth::user()->userid;
            // $sub_query = "(SELECT 'applied' FROM pralonco_career.employer_applicant
            // WHERE userid =".Auth::user()->userid." and id_vacancy = a.id_vacancy) as applied";
            // $vacancies = DB::table('company_vacancy AS a')
            //             ->select('a.id_vacancy','a.vacancy_name','a.company_name','a.banner','a.status','a.vacancy_detail','a.reqDegree', 'a.reqMajor')
            //             ->addSelect(DB::raw('(SELECT "disabled" FROM pralonco_career.employer_applicant
            //             WHERE userid = '."'$user_id'".' and id_vacancy = a.id_vacancy) as disabled'))->paginate(21);
            // $contactInfo = ContactInformation::first();
            
            // return view('job.jobVacancy', compact('data', 'contactInfo', 'vacancies'));
        } 
        else {
            $vacancies = Vacancies::paginate(21);
            $contactInfo = ContactInformation::first();
    
            return view('job.jobVacancy', compact('data', 'contactInfo', 'vacancies'));
        }
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
