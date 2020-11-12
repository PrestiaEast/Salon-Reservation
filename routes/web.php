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
Route::get('/reservation', 'ReservationController@index');

//Create
Route::get('/reservation/create', 'ReservationController@create');

//Show - read
Route::get('/reservation/{reservation}', 'ReservationController@show');

//Store
Route::post('/reservation', 'ReservationController@store');

//Edit
Route::get('/reservation/{reservation}/edit', 'ReservationController@edit');

//Update
Route::put('/reservation/{reservation}', 'ReservationController@update');

//Delete
Route::get('/reservation/{reservation}/delete', 'ReservationController@delete');
