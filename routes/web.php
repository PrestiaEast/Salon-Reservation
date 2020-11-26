<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Index-read
Route::get('/reservations', 'ReservationsController@index');

//Create
Route::get('/reservations/create', 'ReservationsController@create');
Route::get('/reservations/{reservation}', 'ReservationsController@show');

//Edit
Route::get('/reservations/{reservation}/edit', 'ReservationsController@edit');

//POST /Store a record
Route::post('/reservations', 'ReservationsController@store');

//PUT /update a record
Route::put('/reservation/{reservation}', 'ReservationsController@update');

//DELETE
Route::delete('/reservations/{reservation}', 'ReservationsController@delete');