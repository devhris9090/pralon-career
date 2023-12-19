<?php

namespace App\Http\Controllers;

use App\Mail\VerificationEmail;
use App\Models\ContactInformation;
use App\Models\EmailConfiguration;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered; 
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;






class LoginController extends Controller
{
    public function indexLogin()
    {
        
        
        $contactInfo = ContactInformation::first();
        $data = null; // Initialize data as null

        if (Auth::check()) {
            $data = Profile::where('userid', '=', Auth::user()->userid)->first();
        }

        
        return view('login',compact('contactInfo', 'data'));
    }

    public function indexRegister()
    {
        $data = null; // Initialize data as null

        if (Auth::check()) {
            $data = Profile::where('userid', '=', Auth::user()->userid)->first();
        }

        $contactInfo = ContactInformation::first();

        
        return view('register',compact('contactInfo', 'data'));
    }

    public function loginUser(Request $request)
    {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);
    

    if (Auth::attempt($credentials)) {
        if ($request->has('rememberme')) {
            $request->session()->regenerate();
        
            if(isset($request['rememberme']) &&! empty($request['rememberme'])){
                setcookie('email', $request->email, time() + 86400);
                setcookie('password', $request->password, time() + 86400);
            }else{
                setcookie('email', "");
                setcookie('password', "");
            }
        }
        return redirect()->intended('/');
    }

    return back()->with('fail', 'Invalid login credentials');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        // Generate a unique user ID
        $userId = 'user-' . uniqid();

        // Create a new user instance
        $user = User::create([
            'userid' => $userId,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Create a new profile instance and associate it with the user
        $profile = new Profile([
            'userid' => $userId,
            'email' => $request->email,
            'full_name' => $request->full_name,
        ]);
        $user->profile()->save($profile);

        event(new Registered($user));

        $emailConfig = EmailConfiguration::first();

        // Generate the verification URL dynamically using the named route
        $verificationUrl = URL::signedRoute('verification.verify', [
            'id' => $user->getKey(), // Menggunakan $user daripada $request->user()
            'hash' => sha1($user->getEmailForVerification()), // Menggunakan $user daripada $request->user()
        ]);

        // Configure the email settings using the retrieved email configuration
        config([
            'mail.mailers.smtp.host' => $emailConfig->domain,
            'mail.mailers.smtp.port' => $emailConfig->port,
            'mail.mailers.smtp.username' => $emailConfig->username,
            'mail.mailers.smtp.password' => $emailConfig->password,
            'mail.mailers.smtp.encryption' => $emailConfig->smtp,
            'mail.from.address' => $emailConfig->email,
            'mail.from.name' => 'PT. Pralon',
        ]);

        // Send the verification email with the generated URL
        Mail::to($user->email)->send(new VerificationEmail($verificationUrl));

        Auth::login($user);


        return redirect('/email/verify')->with('success', 'Registration successful.');
    }

    public function show(Request $request)
    {
        // Retrieve the contact information (you can fetch it from the database)
        $contactInfo = ContactInformation::first();
        if (Auth::check()) {
            $data = Profile::where('userid', '=', Auth::user()->userid)->first();
        }
    
    
        // Handle the case when the user is not authenticated (optional)
        return view('auth.verifyEmail', compact('contactInfo', 'data'));
    }

    public function verify(Request $request)
    {
        if ($request->route('id') == $request->user()->getKey() &&
            hash_equals((string) $request->route('hash'), sha1($request->user()->getEmailForVerification()))) {
            $request->user()->markEmailAsVerified();
            event(new Verified($request->user()));
        }

        return redirect('/email/verify')->with('verified', true);
    }

    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect('/')->with('success', 'Your email address is already verified.');
        }

        // Generate the verification URL dynamically using the named route
        $verificationUrl = URL::signedRoute('verification.verify', [
            'id' => $request->user()->getKey(),
            'hash' => sha1($request->user()->getEmailForVerification()),
        ]);

        // Retrieve the email configuration
        $emailConfig = EmailConfiguration::first();

        // Configure the email settings using the retrieved email configuration
        config([
            'mail.mailers.smtp.host' => $emailConfig->domain,
            'mail.mailers.smtp.port' => $emailConfig->port,
            'mail.mailers.smtp.username' => $emailConfig->username,
            'mail.mailers.smtp.password' => $emailConfig->password,
            'mail.mailers.smtp.encryption' => $emailConfig->smtp,
            'mail.from.address' => $emailConfig->email,
            'mail.from.name' => 'PT. Pralon',
        ]);

        // Send the verification email with the generated URL
        Mail::to($request->user()->email)->send(new VerificationEmail($verificationUrl));

        return back()->with('resent', true);
    }
}
