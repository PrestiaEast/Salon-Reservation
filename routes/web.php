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

Route::get('/employees', 'EmployeesController@index');

Route::get('/employees/create', 'EmployeesController@create');

Route::get('/employees/{employee}', 'EmployeesController@show');

Route::post('/employees', 'EmployeesController@store');

Route::get('/employees/{employee}/edit', 'EmployeesController@edit');

Route::put('/employees/{employee}', 'EmployeesController@update');

Route::get('/employees/{employee}/delete', 'EmployeesController@delete');



//Index
Route::get('/servicesrendered', 'ServicesrenderedController@index');

//Create
Route::get('/servicesrendered/create', 'ServicesrenderedController@create');

//Store
Route::post('/servicesrendered', 'ServicesrenderedController@store');

//Edit
//Route::get('/servicesrendered/{ServiceRendered}/edit', 'ServicesrenderedController@edit')

//Update
//Route::put('/servicesrendered/{ServiceRendered}', 'ServicesrenderedController@update');

//Delete
//Route::delete('/servicesrendered/{ServiceRendered}', 'ServicesrenderedController@delete);


Route::get('/login', 'AuthController@index')->name('login');
Route::put('/login', 'AuthController@login');
Route::get('/deshboard', 'Dashboardcontroller@index');

