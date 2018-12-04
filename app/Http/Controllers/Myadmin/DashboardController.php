<?php

namespace App\Http\Controllers\Myadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\BloodRequest;
use Session;
use Auth;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function getDonorLists(){
    	$donors = User::orderBy('id','desc')->get();
    	return view('myadmin.donors.alldonorlists')->withDonors($donors);
    }

    public function deleteDonor(Request $request,$id){
      
      $donor = User::find($id);
      $donor->delete();
      return redirect()->back();
    }

    public function getBloodRequestLists(){
    	$requests = BloodRequest::orderBy('id','desc')->get();
    	return view('myadmin.blood-request.allbloodrequest')->withRequests($requests);
    }

    public function deleteBloodRequest(Request $request,$id){
      
      $request = BloodRequest::find($id);
      $request->delete();
      return redirect()->back();
    }
}
