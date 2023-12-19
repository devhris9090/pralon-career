<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\ClientLogo;
use App\Models\ContactInformation;
use App\Models\Profile;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = Profile::where('userid', '=', Session::get('loginId'))->first();
        }
        $imgClients = ClientLogo::where('status', '1')->get();

        $imgPeoples = AboutUs::where('img_category', 'people')->get();
        $imgProcesses = AboutUs::where('img_category', 'process')->get();
        $imgTechnologies = AboutUs::where('img_category', 'technology')->get();
        $imgWorks = AboutUs::where('img_category', 'work')->get();

        $contactInfo = ContactInformation::first();

        return view('welcome', compact('data','imgClients', 'imgPeoples', 'imgProcesses', 'imgTechnologies', 'imgWorks', 'contactInfo'));
    }
}
