<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    //
	
	public function index() {
		return view('map.index');
	}
	
	public function show($map_id){
	
	  return view('map.show');
	
	
	}
}
