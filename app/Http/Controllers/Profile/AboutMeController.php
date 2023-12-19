<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\ContactInformation;
use App\Models\Profile;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AboutMeController extends Controller
{
    public function index()
    {
        
        $data = null;
        if (Auth::check()) {
            $data = Profile::where('userid', '=', Auth::user()->userid)->first();
        }
        $states = State::all();
        $cities = City::all();
        $contactInfo = ContactInformation::first();
        $pageTitle = "About Me"; // This can be dynamic based on the page you're on


        
        return view('userProfile.aboutme',compact('data', 'contactInfo', 'states', 'cities', 'pageTitle'));
    }

    public function update(Request $request) {
        
        $profile = Profile::where('userid', '=', Auth::user()->userid)->first();

        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'birthplace' => 'required',
            'birthdate' => 'required',
            'religion' => 'required',
            'idnumber' => 'required|numeric',
            'maritalstatus' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('showEditModal', true);
        }

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('photos', 'public');
        
            // Move the photo from 'storage/app/public' to 'public/storage/photos'
            $destinationPath = public_path('storage/photos');
            File::makeDirectory($destinationPath, $mode = 0777, true, true);
            $movedPhotoPath = $destinationPath . '/' . $photo->hashName();
            File::move(storage_path('app/public/' . $photoPath), $movedPhotoPath);
        
            $profile->photo = 'photos/' . $photo->hashName();
        }


        $profile->full_name = $request->input('full_name');
        $profile->state_id = $request->input('state');
        $profile->city_id = $request->input('city');
        $profile->address = $request->input('address');
        $profile->phone = $request->input('phone');
        $profile->gender = $request->input('gender');
        $profile->birthdate = $request->input('birthdate');
        $profile->birthplace = $request->input('birthplace');
        $profile->religion = $request->input('religion');
        $profile->idnumber = $request->input('idnumber');
        $profile->maritalstatus = $request->input('maritalstatus');

        $profile->save();
        return redirect()->back()->with('success', 'Profile updated successfully.');

    }
}
