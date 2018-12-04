<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\BloodRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Auth;
use ConsoleTVs\Charts\Facades\Charts;
use Session;
use Carbon\Carbon;

class AnalysisController extends Controller
{
    public function getAnaylysisPage(){
                

                /** Donor Section **/

    	$donors = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $donorchart = Charts::database($donors, 'bar', 'highcharts')
				      ->title("Donors Registration Details")
				      ->elementLabel("All Donors")
				      ->dimensions(1000, 500)
				      ->responsive(true)
				      ->groupByMonth(date('Y'), true);

	    $bloodgroups = DB::table('users')
	                ->select('blood_group', DB::raw('count(*) as total'))
	                ->groupBy('blood_group')
	                ->get();

	     foreach ($bloodgroups as $bg) {
                $bgname[] = $bg->blood_group;
                $bgvalue[] = $bg->total;
            }

	    $bg_pie_chart = Charts::create('area', 'highcharts')
						->title('All Donors Blood Group Ratio') 
						->elementLabel('Blood Groups')
						->labels($bgname)
						->values($bgvalue)
						->dimensions(1000,500)
						->responsive(true);

		$ddistricts = DB::table('users')
			        ->select('district', DB::raw('count(*) as total'))
			        ->groupBy('district')
			        ->get();  

	     foreach ($ddistricts as $dd) {
                $ddname[] = $dd->district;
                $ddvalue[] = $dd->total;
            }

	    $don_by_dis = Charts::create('donut', 'highcharts')
				    ->title('Ratio of Donors By Districts')
				    ->labels($ddname)
				    ->values($ddvalue)
				    ->dimensions(1000,500)
				    ->responsive(true);
             

             /** Blood Request Section **/

        
        $brequest = BloodRequest::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $brchart  = Charts::database($brequest, 'bar', 'highcharts')
				      ->title("Blood Request Details")
				      ->elementLabel("All Blood Request")
				      ->dimensions(1000, 500)
				      ->responsive(true)
				      ->groupByMonth(date('Y'), true);
				      
		$brbbloodgps = DB::table('blood_requests')
	                ->select('blood_group', DB::raw('count(*) as total'))
	                ->groupBy('blood_group')
	                ->get();

	     foreach ($brbbloodgps as $brbg) {
                $brbgname[] = $brbg->blood_group;
                $brbgvalue[] = $brbg->total;
            }

	    $br_bbg_chart = Charts::create('pie', 'highcharts')
						->title('Blood Request Ratio By Blood Groups')
						->labels($brbgname)
						->values($brbgvalue)
						->dimensions(1000,500)
						->responsive(true);

					

		$brbrdoodgps = DB::table('blood_requests')
	                ->select('present_district', DB::raw('count(*) as total'))
	                ->groupBy('present_district')
	                ->get();

	     foreach ($brbrdoodgps as $brrd) {
                $brbrdname[] = $brrd->present_district;
                $brbrdvalue[] = $brrd->total;
            }

	    $br_brd_chart = Charts::create('donut', 'highcharts')
					    ->title('Blood Request Ratio By City')
					    ->labels($brbrdname)
					    ->values($brbrdvalue)
					    ->dimensions(1000,500)
					    ->responsive(true);


    	return view('analysis.analysis',compact('donorchart','bg_pie_chart','don_by_dis','brchart','br_bbg_chart','br_brd_chart'));
    }


    public function postAnaylysisResult(Request $request){
       
       $sdate = $request->sdate;
       $psdate =  Carbon::parse($sdate);

       $car_obj = new Carbon( $psdate );
       $start_year= $car_obj->format('Y');

       //dd($start_year);

       $edate = $request->edate;
       $pedate =  Carbon::parse($edate);

       $donors = User::where('created_at','>', $psdate)->where('created_at','<', $pedate)->get();
       $donorchart = Charts::database($donors, 'bar', 'highcharts')
				      ->title("Donors Registration Details")
				      ->elementLabel("All Donors")
				      ->dimensions(1000, 500)
				      ->responsive(true)
				      ->groupByMonth($start_year,true);
       
       $bloodgroups = DB::table('users')
		                ->select('blood_group', DB::raw('count(*) as total'))
		                ->groupBy('blood_group')
		                ->where('created_at','>', $psdate)
		                ->where('created_at','<', $pedate)
		                ->get();

	     foreach ($bloodgroups as $bg) {
                $bgname[] = $bg->blood_group;
                $bgvalue[] = $bg->total;
            }

	    $bg_pie_chart = Charts::create('area', 'highcharts')
						->title('All Donors Blood Group Ratio') 
						->elementLabel('Blood Groups')
						->labels($bgname)
						->values($bgvalue)
						->dimensions(1000,500)
						->responsive(true);

		/*$ddistricts = DB::table('users')
				        ->select('district', DB::raw('count(*) as total'))
				        ->groupBy('district')
				        ->where('created_at','>', $psdate)
			            ->where('created_at','<', $pedate)
				        ->get();  

	     foreach ($ddistricts as $dd) {
                $ddname[] = $dd->district;
                $ddvalue[] = $dd->total;
            }

	    $don_by_dis = Charts::create('donut', 'highcharts')
				    ->title('Ratio of Donors By Districts')
				    ->labels($ddname)
				    ->values($ddvalue)
				    ->dimensions(1000,500)
				    ->responsive(true);*/
        
        /** Blood Request Section **/

        
        $brequest = BloodRequest::where('created_at','>', $psdate)->where('created_at','<', $pedate)->get();
        $brchart  = Charts::database($brequest, 'bar', 'highcharts')
				      ->title("Blood Request Details")
				      ->elementLabel("All Blood Request")
				      ->dimensions(1000, 500)
				      ->responsive(true)
				      ->groupByMonth($start_year, true);
				      
		$brbbloodgps = DB::table('blood_requests')
		                ->select('blood_group', DB::raw('count(*) as total'))
		                ->groupBy('blood_group')
		                ->where('created_at','>', $psdate)
			            ->where('created_at','<', $pedate)
		                ->get();

	     foreach ($brbbloodgps as $brbg) {
                $brbgname[] = $brbg->blood_group;
                $brbgvalue[] = $brbg->total;
            }

	    $br_bbg_chart = Charts::create('pie', 'highcharts')
						->title('Blood Request Ratio By Blood Groups')
						->labels($brbgname)
						->values($brbgvalue)
						->dimensions(1000,500)
						->responsive(true);

					

		/*$brbrdoodgps = DB::table('blood_requests')
	                ->select('present_district', DB::raw('count(*) as total'))
	                ->groupBy('present_district')
	                ->get();

	     foreach ($brbrdoodgps as $brrd) {
                $brbrdname[] = $brrd->present_district;
                $brbrdvalue[] = $brrd->total;
            }

	    $br_brd_chart = Charts::create('donut', 'highcharts')
					    ->title('Blood Request Ratio By City')
					    ->labels($brbrdname)
					    ->values($brbrdvalue)
					    ->dimensions(1000,500)
					    ->responsive(true);*/


    	return view('analysis.anasearchresult',compact('donorchart','bg_pie_chart','brchart','br_bbg_chart'))->withSdate($sdate)->withEdate($edate);


    }
}
