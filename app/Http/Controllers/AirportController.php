<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Airports;

class AirportController extends Controller
{
	public function index()

	{

	    $airports = Airports::all();

	    return view('airports.index', compact('airports'));

	}
}
