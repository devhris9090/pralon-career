<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function indexLogin()
    {
        
        
        $contactInfo = ContactInformation::first();
        $data = array();
        if(Session::has('loginId')){
            $data = Profile::where('userid', '=', Session::get('loginId'))->first();
        }

        
        return view('login',compact('contactInfo', 'data'));
    }

    public function indexRegister()
    {
        
        $contactInfo = ContactInformation::first();

        
        return view('register',compact('contactInfo'));
    }

    public function loginUser(Request $request)
    {
        
        // Validate the input data
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        $user=User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                // dd($request);
                Session::put('loginId', $user->userid);
                if(isset($request['rememberme']) &&! empty($request['rememberme'])){
                    setcookie('email', $request->email, time() + 86400);
                    setcookie('password', $request->password, time() + 86400);
                }else{
                    setcookie('email', "");
                    setcookie('password', "");
                }
                // dd($user);
                return redirect('/');
            }else{
                return back()->with('fail', 'wrong password');
            }
        }else{
            return back()->with('fail', 'this email is not registered');
        }
        

        // Perform login logic here
        // You can use the Auth facade or any other method to authenticate the user

        
        return view('login',compact('contactInfo'));
    }

    public function registerUser(Request $request){
        $request->validate([
            'full_name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);
        $user = new User();
        $profile = new Profile();
        $user->userid = 'user-' . uniqid();
        $profile->userid = $user->userid;
        $profile->full_name = $request->full_name;
        $user->email = $request->email;
        $profile->email = $user->email;
        $user->password = hash::make($request->password);

        
        
        $res = $user->save();
        if($res){
            $profile->save();
            return redirect('/login')->with('success','registered successfully');
        }else{
            return back()->with('fail', 'something wrong');
        }
    }
}
