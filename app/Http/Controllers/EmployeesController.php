<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){
    	$employees = Employee::get();
    	return view('employees.index', compact('employee'));
    }

    public function show(Employee $employee){
    	return view('employees.show', compact('employee'));

    }

    public function create(){
    	return view('employees.create', compact('employee'));
    }

    public function store(){
    	$employee = new Employee;
    	$employee->name=request()->name;
    	$employee->age=request()->age;
    	$employee->contact_number=request()->contact_number;
    	$employee->save();

    	return redirect('/employees');
    }

    public function edit(Employee $employee){
    	$employee->name=request()->name;
    	$employee->age=request()->age;
    	$employee->contact_number=request()->contact_number;
    	$employee->save();

    	return redirect('/employees');

    }

    public function delete(Employee $employee){
    	$employee->delete();
    	return redirect('/employees');
    }
}
