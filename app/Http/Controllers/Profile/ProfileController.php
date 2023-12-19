<?php

namespace App\Http\Controllers\Profile;


use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use App\Models\Educations;
use App\Models\Experiences;
use App\Models\Families;
use App\Models\Profile;
use App\Models\Skills;
use App\Models\TrainingAchievements;
use App\Models\Applicants;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PDF;

class ProfileController extends Controller
{

    public function index()
    {
        
        $data = null;
        $skills = null;
        if (Auth::check()) {
            $user = Auth::user();
        
            $data = Profile::where('userid', '=', $user->userid)->first();
        
            $educations = collect(Educations::where('userid', '=', $user->userid)
                ->orderByDesc('endYear')
                ->get());
        
            $experiences = collect(Experiences::where('userid', '=', $user->userid)
                ->where('yosStart', '<=', Carbon::today())
                ->orderByDesc('yosStart')
                ->get());
        
            $skills = collect(Skills::where('userid', '=', $user->userid)
                ->orderByDesc('skillValue')
                ->limit(4)
                ->get());
        
            $families = collect(Families::where('userid', '=', $user->userid)
                ->orderByDesc('familyName')
                ->get());
        
            $trains = collect(TrainingAchievements::where('userid', '=', $user->userid)
                ->where('trachCategory', '=', 'Training')
                ->get());
        
            $achievements = collect(TrainingAchievements::where('userid', '=', $user->userid)
                ->where('trachCategory', '=', 'Achievement')
                ->get());
        }
        

        $experience = $experiences->first();
        $education = $educations->first();
        $photoUrl = null;
        if (!empty($data->photo)) {
            $photoUrl = asset('storage/' . $data->photo);
        }
        $contactInfo = ContactInformation::first();
        $pageTitle = "My Profile"; // This can be dynamic based on the page you're on


        
        return view('userProfile.profile', compact('data', 'contactInfo', 'photoUrl', 'experiences', 'experience', 'education', 'educations', 'skills', 'families', 'trains', 'achievements', 'pageTitle'));
    }

    public function generateUserToPdf(Request $request) {
        try {
            $dataPdf = [];
            // dd($request->vacancy_name_applied);
            // dd($request->input());
            if (Auth::check()) {
                $user = Profile::where('userid', '=', Auth::user()->userid)->first();
                $experiences = Experiences::where('userid', '=', Auth::user()->userid)->get();
                $educations = collect(Educations::where('userid', '=', Auth::user()->userid)
                    ->where(function ($query) {
                        $query->Where('startYear', '<=', Carbon::today()->toDateString());
                    })
                    ->orderBy('startYear')
                    ->get());
                $skills = Skills::where('userid', '=', Auth::user()->userid)->latest()->get();
                $families = collect(Families::where('userid', '=', Auth::user()->userid)->get());
                $trachs = TrainingAchievements::where('userid', '=', Auth::user()->userid)->get();
                // $emp_applicant = Applicants::where('userid', '=', Auth::user()->userid)->first();
                $emp_applicant = Applicants::with('vacancy')->where('userid', '=', Auth::user()->userid)->first();

                $dataPdf = [
                    'user' => $user,
                    'applicant' => $emp_applicant,
                    'experiences'=> $experiences,
                    'educations'=> $educations,
                    'skills'=> $skills,
                    'family'=> $families,
                    'training_achievement' => $trachs,
                    'applicant_applied' => $request->vacancy
                ];
            }
            ini_set('memory_limit', '2048M');
            $pdf = PDF::loadView('userProfile.form_application.form_application', $dataPdf)->setOptions([
                'dpi' => 150,
                'isHtml5ParserEnabled' => true,
                'isPhpEnabled' => true,
                'isPhp7' => true,
                'isHtml4ParserEnabled' => false,
                'isFontSubsettingEnabled' => true,
                'isJavascriptEnabled' => true,
                'isHtmlExternalLinkEnabled' => true,
                'isRemoteEnabled' => true,
                'enable_remote' => true,
                'chroot'=> public_path('storage/'),
                'defaultFont' => 'sans-serif'
            ]);
            $pdf->setPaper(array(0,0,609.4488,935.433),'portrait');
            return $pdf->download('form_application.pdf');
            // return $pdf->stream('form_application.pdf');
        } catch (\Throwable $th) {
            \Log::error('Error: ' . $th->getMessage());

            return response()->json([
                'error'=> $th->getMessage()
            ],500);
        }
    }

    public function userApplicationStatus(Request $request) {
        if (Auth::check()) {
            try {
                $data = Profile::where('userid', '=', Auth::user()->userid)->first();
                $applicant_list = Applicants::with('vacancy')->where('userid', Auth::user()->userid)->paginate(21);
                $pageTitle = "Application Status";
                $contactInfo = ContactInformation::first();
                // dd($applicant_list);
                return view('userProfile.aplication_status', compact('data', 'contactInfo', 'pageTitle', 'applicant_list'));
            } catch (\Throwable $th) {
                \Log::error('Error : '. $th->getMessage());
                return response()->json([
                    'error'=> $th->getMessage()
                    ],404);
            }
        }
    }
}
