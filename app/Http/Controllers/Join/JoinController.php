<?php

namespace App\Http\Controllers\Join;

use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;


class JoinController extends Controller
{
    public function index()
    {
        $data = array();
        if (Auth::check()) {
            $data = Profile::where('userid', '=', Auth::user()->userid)->first();
        }
        $contactInfo = ContactInformation::first(); 

        return view('join', compact('data', 'contactInfo'));
    }
}
