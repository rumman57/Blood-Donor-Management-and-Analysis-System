<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donation;
use App\Mail\ToDonorMail;
use Session;
use Auth;
use Carbon\Carbon;
use Mail;


class MailController extends Controller
{
    public function getMailtoDonorPage($id){
        
        $donor = User::find($id);
        return view('mails.mailtodonor')->withDonor($donor);
    }

    public function postMailtoDonor(Request $request){

       $this->validate($request,[
        'name' => 'required|max:150|min:3',
        'message' => 'required',
        'subject' => 'required'
        ]);

       $donor_id = $request->donor_id;
       $donor = User::find($donor_id);

        Mail::send(new ToDonorMail($request));

        Session::flash('registerdonor','Mail Sent Successfully....');

        return redirect()->back();
    }
}
