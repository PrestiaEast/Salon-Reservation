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

// Index - read
Route::get('/services', 'ServicesController@index');

//Create
Route::get('/services/create', 'ServicesController@create');

//Show - read
Route::get('/services/{service}', 'ServicesController@show');

//Store
Route::post('/services', 'ServicesController@store');

//Edit
Route::get('/services/{service}/edit', 'ServicesController@edit');

//Update
Route::put('/services/{service}', 'ServicesController@update');

//Delete
Route::get('/services/{service}/delete', 'ServicesController@delete');

//Request Validation
Route::get('/newservices', 'AuthController@store');
Route::post('/newservices', 'AuthController@store');