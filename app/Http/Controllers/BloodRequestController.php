<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BloodRequest;
use Session;
use Auth;
use Carbon\Carbon;

class BloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = BloodRequest::orderBy('id','desc')->paginate(12);
        return view('blood_requests.show')->withRequests($requests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blood_requests.create');
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
             'name'   => 'required|max:30',
             'phone'   => 'required',
             'blood_group'   => 'required',
             'amount'   => 'required',
             'division'   => 'required',
             'present_district'   => 'required',
             'present_location'   => 'required',
             'date'   => 'required',
             'code'   => 'required',
             'messages'   => 'max:200',
           
        ]);

        $BloodRequest = new BloodRequest();

        $BloodRequest->name             = $request->name;
        $BloodRequest->phone            = $request->phone;
        $BloodRequest->blood_group      = $request->blood_group;
        $BloodRequest->amount           = $request->amount;
        $BloodRequest->division         = $request->division;
        $BloodRequest->present_district = $request->present_district;
        $BloodRequest->date             = $request->date;
        $BloodRequest->present_location = $request->present_location;
        $BloodRequest->code             = $request->code;
        $BloodRequest->messages         = $request->messages;

        $BloodRequest->save();

        Session::flash('registerdonor',"You request submited successfully. Your request will be visible in our blood request list now.");

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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         if(Session::get('reqcode')=='valid' && Session::get('reqcodeid')==$id){
            $request = BloodRequest::find($id);
            return view('blood_requests.edit')->withRequest($request);
        }else{
            return redirect()->route('check.code',$id);
        }
       
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
        $this->validate($request,[
             'name'   => 'required|max:30',
             'phone'   => 'required',
             'blood_group'   => 'required',
             'amount'   => 'required',
             'division'   => 'required',
             'present_district'   => 'required',
             'present_location'   => 'required',
             'date'   => 'required',
             'code'   => 'required',
             'messages'   => 'max:200',
           
        ]);

        $BloodRequest = BloodRequest::find($id);

        $BloodRequest->name             = $request->name;
        $BloodRequest->phone            = $request->phone;
        $BloodRequest->blood_group      = $request->blood_group;
        $BloodRequest->amount           = $request->amount;
        $BloodRequest->division         = $request->division;
        $BloodRequest->present_district = $request->present_district;
        $BloodRequest->date             = $request->date;
        $BloodRequest->present_location = $request->present_location;
        $BloodRequest->code             = $request->code;
        $BloodRequest->messages         = $request->messages;

        $BloodRequest->save();

        Session::flash('registerdonor',"Request Updated successfully..");

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request = BloodRequest::find($id);
        $request->delete();
        Session::forget('reqcode');
        Session::forget('reqcodeid');
        return redirect()->route('requests.index');
    }
}
