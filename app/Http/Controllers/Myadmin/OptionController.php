<?php

namespace App\Http\Controllers\Myadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SiteOption;
use Session;

class OptionController extends Controller
{
    
    public function getSiteOption(){
        $sos = SiteOption::find(1);
        return view('myadmin.siteoptions.siteoptions')->withSiteoptions($sos);
    }

    public function postSiteOption(Request $request){
         $this->validate($request,[
            'site_desc' => '',
            'copyright' =>'min:3|max:100'
        ]);

        $siteops = SiteOption::find(1);
        $siteops->site_desc = $request->input('site_desc');
        $siteops->copyright = $request->input('copyright');
        
       
        if($request->hasFile('site_image')){
            $image = $request->file('site_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/');
            $image->move($location, $filename);
            $siteops->logo = $filename;
         }

         $siteops->save();
         Session::flash('adsuccess','Options Set Successfully...');
         return redirect()->back();
    }

}
