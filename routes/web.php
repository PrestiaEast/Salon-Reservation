<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//RESERVATION**

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
Route::put('/reservations/{reservation}', 'ReservationsController@update');

//DELETE
Route::delete('/reservations/{reservation}', 'ReservationsController@delete');


//SERVICE RENDERED**

Route::get('/service-rendered', 'ServicesrenderedController@index');

Route::get('/service-rendered/create', 'ServicesrenderedController@create');

Route::get('/service-rendered/{servicerendered}', 'ServicesrenderedController@show');

Route::post('/service-rendered', 'ServicesrenderedController@store');

Route::get('/service-rendered/{servicerendered}/edit', 'ServicesrenderedController@edit');

Route::put('/service-rendered/{servicerendered}', 'ServicesrenderedController@update');

Route::delete('/service-rendered/{servicerendered}', 'ServicesrenderedController@delete');


//SERVICES**

Route::get('/services', 'ServicesController@index');

Route::get('/services/create', 'ServicesController@create');

Route::get('/services/{service}', 'ServicesController@show');

Route::post('/services', 'ServicesController@store');

Route::get('/services/{service}/edit', 'ServicesController@edit');

Route::put('/services/{service}', 'ServicesController@update');

Route::delete('/services/{service}', 'ServicesController@delete');


//CUSTOMER**

//index - read of crud
Route::get('/customers', 'CustomersController@index');

//create 
Route::get('/customers/create', 'CustomersController@create');

//show (single) - read of crud
 Route::get('/customers/{customer}', 'CustomersController@show');
 //store data
 Route::post('/customers', 'CustomersController@store');

//edit
Route::get('/customers/{customer}/edit', 'CustomersController@edit');

//update
Route::put('/customers/{customer}', 'CustomersController@update');

//delete
Route::delete('/customers/{customer}', 'CustomersController@delete');


//EMPLOYEE**

Route::get('/employees', 'EmployeesController@index');

Route::get('/employees/create', 'EmployeesController@create');

Route::get('/employees/{employee}', 'EmployeesController@show');

Route::post('/employees', 'EmployeesController@store');

Route::get('/employees/{employee}/edit', 'EmployeesController@edit');

Route::put('/employees/{employee}', 'EmployeesController@update');

Route::delete('/employees/{employee}', 'EmployeesController@delete');