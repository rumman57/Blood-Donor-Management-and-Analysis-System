<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware('auth:admin',['except' => []]);
	}
    public function getIndex(){
    	return view('myadmin.index');
    }
    
    
}
