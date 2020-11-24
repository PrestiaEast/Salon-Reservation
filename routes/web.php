<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Index-read
Route::get('/reservations', 'ReservationController@index');

//Create
Route::get('/reservations/create', 'ReservationController@create');

//Show - read
Route::get('/reservations/{reservation}', 'ReservationController@show');

//Store
Route::post('/reservations', 'ReservationController@store');

//Edit
Route::get('/reservations/{reservation}/edit', 'ReservationController@edit');

//Update
Route::put('/reservations/{reservation}', 'ReservationController@update');

//Delete
Route::get('/reservations/{reservation}/delete', 'ReservationController@delete');
