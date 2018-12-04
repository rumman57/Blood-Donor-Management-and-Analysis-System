<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
//use GMaps;

class HomeController extends Controller
{
    public function getIndexPage(){

		$ddistricts = DB::table('users')
			        ->select('district', DB::raw('count(*) as total'))
			        ->groupBy('district')
                    ->orderBy('district','ASC')
			        ->get(); 
        foreach ($ddistricts as $value) {
        	$disv = $value;
        }
        $posts = Post::orderBy('id','desc')->take(3)->get();
    	return view('home.index')->withPosts($posts)->withDis($ddistricts);
    }
}
