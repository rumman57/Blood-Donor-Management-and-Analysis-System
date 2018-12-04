<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Auth;

class UserAuthController extends Controller
{
     public function getLoginPage(){
    	return view('auth.login');
    }
    public function postLogin(Request $request){

    	$this->validate($request,[
             'email'   => 'required|email',
             'password' =>  'required'
        ]);
        
        $email     = $request->email;
        $password  = $request->password;
       
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
           
            return redirect()->route('user.profile');
        }
        Session::flash('logindonorerror','Sorry!!! Wrong Credentials.');
        return redirect()->back();
    }
    

    public function getPreRegisterPage(){
      return view('auth.preregister');
    }

    public function postPreRegister(Request $request){
       
      $checkage   =   $request->checkage;
      $checkweight   =   $request->checkweight;
      $checkembroys   =   $request->checkembroys;
      $checktransfusion   =   $request->checktransfusion;
      $checkcancer   =   $request->checkcancer;

      if($checkage=='y' && $checkweight=='n' && $checkembroys=='n' && $checktransfusion=='n' && $checkcancer=='n'){
        
        Session::put('regvalidity', 'Eligible');
        return redirect()->route('user.register');

      }else{
        
        Session::put('regvalidity', 'notEligible');
        Session::flash('regvaliditymsg',"You are not eligible to donate blood.");
        return redirect()->back();

      }

    }

    public function getRegisterPage(){

      $value = Session::get('regvalidity');
      
      if($value=='Eligible'){
        return view('auth.register');
      }else{
        return redirect()->route('user.preregister'); 
      }
    	
    }

    public function postRegister(Request $request){
      
      $this->validate($request,[
             'name'   => 'required|max:30',
             'email'   => 'required|email',
             'password' =>  'required',
             'phone' =>  'required',
             'age' =>  'required|integer',
             'blood_group' =>  'required',
             'district' =>  'required',
             'division' =>  'required',
             'address' =>  ''
        ]);

      $user = new User();

      $user->name        = $request->name;
      $user->email       = $request->email;
      $user->password    = bcrypt($request->password);
      $user->phone       = $request->phone;
      $user->age         = $request->age;
      $user->blood_group = $request->blood_group;
      $user->district    = $request->district;
      $user->division    = $request->division;
      $user->address     = $request->address;

      $user->save();

      Session::flash('registerdonor',"You are registered successfully. Pls login in here  <a href='/login'>Login</a>");

      return redirect()->back();

    }

}
