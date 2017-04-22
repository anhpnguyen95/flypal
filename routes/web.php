<?php


//Route::get('/user', 'UserController@index');

Route::get('/establishments', 'EstablishmentController@index');

Route::get('/establishments/{establishment}', 'EstablishmentController@show');

