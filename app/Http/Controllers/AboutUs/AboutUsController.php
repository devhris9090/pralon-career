<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class AboutUsController extends Controller
{
    public function index()
    {
        $data = null;
        if (Auth::check()) {
            $data = Profile::where('userid', '=', Auth::user()->userid)->first();
        }
        $contactInfo = ContactInformation::first(); 

        return view('aboutus', compact('data', 'contactInfo'));
    }
}
