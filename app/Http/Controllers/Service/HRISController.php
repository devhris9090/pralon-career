<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use App\Models\Profile;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class HRISController extends Controller
{
    public function presentHR()
    {
        $data = null;
        if (Auth::check()) {
            $data = Profile::where('userid', '=', Auth::user()->userid)->first();
        }
        $contactInfo = ContactInformation::first(); 

        return view('services.presentHR', compact('data', 'contactInfo'));
    }

    public function TrainingDevelopment()
    {
        $data = null;

        if (Auth::check()) {
            $data = Profile::where('userid', '=', Auth::user()->userid)->first();
        }


    $contactInfo = ContactInformation::first(); 

    return view('services.TrainingDevelopment', compact('data', 'contactInfo'));
}
    

    public function ExecutiveMasshiring()
    {
        $data = null;
        if (Auth::check()) {
            $data = Profile::where('userid', '=', Auth::user()->userid)->first();
        }
        $contactInfo = ContactInformation::first(); 

        return view('services.ExecutiveMasshiring', compact('data', 'contactInfo'));
    }
}
