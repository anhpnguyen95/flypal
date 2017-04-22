<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Establishments;

class EstablishmentController extends Controller
{
    public function index()

    {

    	$establishments = Establishments::all();

    	return view('establishment.index', compact('establishments'));
    }

    public function show($establishment_id)

    {

    	$establishment = Establishments::find($establishment_id);

    	return view('establishment.show', compact('establishment'));
    }

}


