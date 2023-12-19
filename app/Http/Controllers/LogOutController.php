<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogOutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logoutUser(Request $request)
    {
        $request->session()->forget('loginId');
        $request->session()->flush();
    
        // Redirect the user to the desired logout page or homepage
        return redirect('/login')->with('success', 'Logged out successfully');
    }



    public function __invoke(Request $request)
    {
        Auth::logout();



        return redirect('/');
    }
}
