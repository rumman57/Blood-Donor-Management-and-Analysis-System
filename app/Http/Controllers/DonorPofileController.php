<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Auth;
use Carbon\Carbon;

class DonorPofileController extends Controller
{
    public function getProfilePage(){

    	$userid = Auth::user()->id;
    	$user = User::find($userid);

    	return view('donor_profiles.profile')->withUser($user);
    }

    public function getUpdateProfilePage(){

    	$userid = Auth::user()->id;
    	$user = User::find($userid);
    	return view('donor_profiles.update')->withUser($user);

    }

    public function postUpdateProfilePage(Request $request){

    	$this->validate($request,[
             'name'   => 'required|max:30',
             'phone' =>  'required',
             'age' =>  'required|integer',
             'blood_group' =>  'required',
             'district' =>  'required',
             'division' =>  'required',
             'currdistrict' =>  'required',
             'address' =>  '',
             'smoker' =>  '',
             'drugadd' =>  '',
             'weight' =>  '',
             'dob' =>  '',
             'gender' =>  '',
             'pradd' =>  ''
        ]);
      
      $userid = Auth::user()->id;
      $user = User::find($userid);

      $user->name        = $request->name;

      $user->phone       = $request->phone;
      $user->age         = $request->age;
      $user->blood_group = $request->blood_group;
      $user->district    = $request->district;
      $user->division    = $request->division;
      $user->currdistrict     = $request->currdistrict;
      $user->address     = $request->address;
      $user->smoker     = $request->smoker;
      $user->drugadd     = $request->drugadd;
      $user->weight     = $request->weight;
      $user->dob     = $request->dob;
      $user->gender     = $request->gender;
      $user->pradd     = $request->pradd;

      $user->save();

     // Session::flash('registerdonor',"");

      return redirect()->route('user.profile');
    }

    public function getChangePasswordPage(){

    	$userid = Auth::user()->id;
    	$user = User::find($userid);
    	return view('donor_profiles.password')->withUser($user);

    }

    public function postChangePasswordPage(Request $request){

    	$this->validate($request,[
            'old_password'       => 'required',
            'password'    => 'required|confirmed',
            'password_confirmation' => 'sometimes|required_with:password'
        ]);

        $userid = Auth::user()->id;
        $email = Auth::user()->email;

        $user = User::find($userid);
        $password = $request->old_password;

        if(Auth::attempt(['email'=>$email,'password'=>$password])){
           
           $user->password = bcrypt($request->password);
            
        }else{
           Session::flash('logindonorerror','Ooops!! Old Password Is Not Correct..');
            return redirect()->back();
        }

        $user->save();
        Session::flash('registerdonor','Password Changed Successfully....');
        Auth::logout();
        return redirect()->back();
    }

    public function getChangePofilePicPage(){

    	$userid = Auth::user()->id;
    	$user = User::find($userid);
    	return view('donor_profiles.photo')->withUser($user);
    }

    public function postChangePofilePic(Request $request){
        

        $this->validate($request,[
            'image'       => 'required|image'
        ]);

        $userid = Auth::user()->id;
    	$user = User::find($userid);

    	if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/propic/');
            $image->move($location, $filename);
            $user->image = $filename;
        }

        $user->save();
        Session::flash('registerdonor','Profile Pic Changed Successfully.');
        return redirect()->back();

    }

    public function getProfilePrivacyPage(){

    	$userid = Auth::user()->id;
    	$user = User::find($userid);
    	return view('donor_profiles.privacy')->withUser($user);
    }

    public function postProfilePrivacyPage(Request $request){

    	$this->validate($request,[
            'is_show_profile'       => '',
            'is_show_in_history'       => '',
            'is_want_to_donate_now'       => '',
            'is_wantto_rec_mail_for_admnistrative_purpose'       => '',
            'is_wantto_rec_mail_for_blood_req'       => '',
            'is_wantto_rec_mail_from_people'       => ''
        ]);

        $userid = Auth::user()->id;
    	$user = User::find($userid);

        $user->is_show_profile       = $request->is_show_profile;
        $user->is_show_in_history         = $request->is_show_in_history;
        $user->is_want_to_donate_now         = $request->is_want_to_donate_now;
        $user->is_wantto_rec_mail_for_admnistrative_purpose         = $request->is_wantto_rec_mail_for_admnistrative_purpose;
        $user->is_wantto_rec_mail_for_blood_req         = $request->is_wantto_rec_mail_for_blood_req;
        $user->is_wantto_rec_mail_from_people       = $request->is_wantto_rec_mail_from_people;
        
        $user->save();
        Session::flash('registerdonor','Updated Privacy Options Successfully');
        return redirect()->back();

    }

}
