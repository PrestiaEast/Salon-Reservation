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

//index - read of crud
Route::get('/customer', 'CustomersController@index');

//create 
Route::get('/customers', 'CustomersController@create');
//store data
 Route::post('/customers', 'CustomersController@store');

//show (single) - read of crud
 Route::get('/customer/{customer}', 'CustomersController@show');


//edit
Route::get('/customer/{customer}/edit', 'CustomersController@edit');

//update
Route::put('/customer/{customer}', 'CustomersController@update');

//delete
Route::delete('/customer/{customer}', 'CustomersController@delete');
