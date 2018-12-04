<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BloodRequest;
use App\Models\Donation;
use Session;
use Auth;
use Carbon\Carbon;

class SearchDonorController extends Controller
{
    public function getSearchDonorPage(){
      
      $bloodgroups = DB::table('users')
	                ->select('blood_group', DB::raw('count(*) as total'))
	                ->groupBy('blood_group')
	                ->get();

      $ddistricts = DB::table('users')
			        ->select('district', DB::raw('count(*) as total'))
			        ->groupBy('district')
			        ->get();  

       return view('search.search')->withBloodgroups($bloodgroups)->withDonordistricts($ddistricts);
    }

    public function getDonorByBloodGroup($group){
      
      $ddistricts = DB::table('users')
              ->select('district', DB::raw('count(*) as total'))
              ->groupBy('district')
              ->where('blood_group','=',$group)
              ->get(); 

      $donors = User::where('blood_group','=',$group)->where('is_show_profile','=',1)->orderBy('id','desc')->get();
      return view('search.searchresult')->withDonors($donors)->withSresult($group)->withDis($ddistricts); 
    }

    public function getDonorByDistrict($district){
      
      $donorfirstperson = User::where('district','=',$district)->first();
      $donordiv = $donorfirstperson->division;
      $sdisdiv = "";

      if($donordiv=='Barisal'){
         $sdisdiv = "Barisal";
      }elseif ($donordiv=='Chittagong') {
       $sdisdiv = "Chittagong";
      }elseif ($donordiv=='Dhaka') {
        $sdisdiv = "Dhaka";
      }elseif ($donordiv=='Khulna') {
        $sdisdiv = "Khulna";
      }elseif ($donordiv=='Mymensingh') {
        $sdisdiv = "Mymensingh";
      }elseif ($donordiv=='Rajshahi') {
        $sdisdiv = "Rajshahi";
      }elseif ($donordiv=='Rangpur') {
        $sdisdiv = "Rangpur";
      }elseif ($donordiv=='Sylhet') {
        $sdisdiv = "Sylhet";
      }

      $ddistricts = DB::table('users')
              ->select('district', DB::raw('count(*) as total'))
              ->groupBy('district')
              ->where('division','=',$sdisdiv)
              ->get();

    	$donors = User::where('district','=',$district)->where('is_show_profile','=',1)->orderBy('id','desc')->get();
    	return view('search.searchresultbydis')->withDonors($donors)->withSresult($district)->withDis($ddistricts); 
    }
}
