<?php

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/establishments', 'EstablishmentController@index');

Route::get('/establishments/{establishment}', 'EstablishmentController@show');

Route::get('/airports', 'AirportController@index');

Route::get('/airports/{airport}', 'AirportController@show');
