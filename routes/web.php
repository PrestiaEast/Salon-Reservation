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

Route::get('/employees', 'EmployeesController@index');

Route::get('/employees/create', 'EmployeesController@create');

Route::get('/employees/{employee}', 'EmployeesController@show');

Route::post('/employees', 'EmployeesController@store');

Route::get('/employees/{employee}/edit', 'EmployeesController@edit');

Route::put('/employees/{employee}', 'EmployeesController@update');

Route::get('/employees/{employee}/delete', 'EmployeesController@delete');

Route::get('/newemployee', 'EmployeesController@store');

Route::post('/newemployee', 'EmployeesController@store');



