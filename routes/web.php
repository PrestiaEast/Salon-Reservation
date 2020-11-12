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

//Index
Route::get('/servicesrendered', 'ServicesrenderedController@index');

//Create
Route::get('/servicesrendered/create', 'ServicesrenderedController@create');

//Store
Route::post('/servicesrendered', 'ServicesrenderedController@store');

//Edit
Route::get('/servicesrendered/{ServiceRendered}/edit', 'ServicesrenderedController@edit')

//Update
Route::put('/servicesrendered/{ServiceRendered}', 'ServicesrenderedController@update');

//Delete
Route::delete('/servicesrendered/{ServiceRendered}', 'ServicesrenderedController@delete);