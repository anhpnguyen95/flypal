<?php

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/establishments', 'EstablishmentController@index');

Route::get('/establishments/{establishment}', 'EstablishmentController@show');

Route::get('/airports', 'AirportController@index');

Route::get('/airports/{airport}', 'AirportController@show');

Route::get('/flightstatus', function()
{
		return View::make('\\flightstatus\\FS\\main');
});

Route::get('/map', 'mapcontroller@index');
Route::get('/map/{map}', 'mapcontroller@show');

Route::get('/status', 'Statuscontroller@index');



