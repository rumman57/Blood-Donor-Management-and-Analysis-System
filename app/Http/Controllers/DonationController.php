<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donation;
use Session;
use Auth;
use Carbon\Carbon;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::user()->id;
        $donations = Donation::where('user_id','=',$userid)->orderBy('id','desc')->paginate(15);
        return view('donor_profiles.donationhistory')->withDonations($donations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userid = Auth::user()->id;
        $user = User::find($userid);
        return view('donor_profiles.adddonation')->withUser($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
             'user_id'   => 'required',
             'donation_date'   => 'required',
             'donation_to'   => 'required',
             'donation_address'   => ''

        ]);

        $donation = new Donation();

        $donation->user_id        = $request->user_id;
        $donation->donation_date        = $request->donation_date;
        $donation->donation_to        = $request->donation_to;
        $donation->donation_address        = $request->donation_address;
        
        $donation->save();
        Session::flash('registerdonor',"Donation Date Added Successfully..");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
       // var_dump('asdf');
        $donation = Donation::find($id);
        $donation->delete();
        return redirect()->back();
    }
}
