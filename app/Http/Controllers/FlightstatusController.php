<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\flightstatus;

class FlightstatusController extends Controller
{
	public function index()
	{
		return View::make('flightstatus.index');
	}
}
?>