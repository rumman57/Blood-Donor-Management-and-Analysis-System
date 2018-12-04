<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use Auth;
use Session;

class AdminAuthController extends Controller
{
     public function __construct(){
		$this->middleware('guest:admin',['except' => ['getLogOut']]);
	}
        
        /*****Admin Login**********/
    
    public function getLogin(){
        return view('myadmin.auth.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,[
             'email'   => 'required|email',
             'password' =>  'required'
        ]);
   
      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        return redirect()->route('admin.index');
      }
        Session::flash('admin-loginerror','Email Or Password Is Incorrect');
        return redirect()->back();
            
    }

        /*********Admin Register**********/
    
    public function getRegistrationForm(){
    	return view('myadmin.auth.register');
    }
    
    public function postRegister(Request $request){
    	 // Validate the form data
      $this->validate($request, [
         'name'    =>  'required|alpha|max:100|min:4',
    	 'email'   => 'required|email',
    	 'password' =>  'required|confirmed',
    	 'password_confirmation' => 'sometimes|required_with:password'
      ]);
      
      $admin = new Admin();

      $admin->name = $request->name;
      $admin->email = $request->email;
      $admin->password = bcrypt($request->password);
      $admin->save();
      return redirect()->route('admin.login');
     
    }
          /******Admin Logout********/

    public function getLogOut(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    

    public function getAdminProfile(){
         return view('myadmin.adminuser.adminprofile');
    }
    public function postChangeAdminEmail(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'newemail' => 'required|email'
        ]);
        
        $adminid = Auth::user()->id;
        $getadmin = AdminUser::find($adminid);
        if($getadmin->email != $request->email){
        Session::flash('profileerror','Ooops!! This Email Is Not Logged Email....');
            return redirect()->back();
        }else{
            $getadmin->email = $request->newemail;
            
        }
        $getadmin->save();
        Session::flash('adsuccess','Email Changed Successfully....');
        return redirect()->back();

    }
    public function postChangePassword(Request $request){
        $this->validate($request,[
            'oldpassword'       => 'required',
            'password'    => 'required|confirmed',
            'password_confirmation' => 'sometimes|required_with:password'
        ]);
        $ademail = Auth::user()->email;
        $adminid = Auth::user()->id;
        $getadmin = AdminUser::find($adminid);
        $password = $request->oldpassword;
        if(Auth::attempt(['email'=>$ademail,'password'=>$password])){
           
           $getadmin->password = bcrypt($request->password);
           $getadmin->retype_password = bcrypt($request->password_confirmation);
            
        }else{
           Session::flash('profileerror','Ooops!! Previous Password Is Not Correct..');
            return redirect()->back();
        }
        $getadmin->save();
        Session::flash('adsuccess','Password Changed Successfully....');
        Auth::logout();
        return redirect()->back();
    }
}
