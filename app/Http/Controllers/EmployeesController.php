<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
    	$employees = Employee::get();
    	return view('employees.index', compact('employees'));
    }

    public function show(Employee $employee)
    {
    	return view('employees.show', compact('employee'));

    }

    public function create()
    {
    	return view('employees.create');
    }

    public function store()
    {
    	//$employee = new Employee;
    	//$employee->name=request()->name;
    	//$employee->age=request()->age;
    	//$employee->contact_number=request()->contact_number;
    	//$employee->save();

        $validated_fields = request()->validate([
            'name' => 'required',
            'age' => 'required',
            'contact_number' => 'required|unique:employees',
        ]);

        $employee = Employee::create($validated_fields);

    	return redirect('/employees');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Employee $employee)
    {
    	//$employee->name =request()->name;
    	//$employee->age =request()->age;
    	//$employee->contact_number =request()->contact_number;
    	//$employee->save();

        $validated_fields = request()->validate([
            'name' => 'required',
            'age' => 'required',
            'contact_number' => 'required'           

        ]);

        $employee->update($validated_fields);

    	return redirect('/employees/'.$employee->id);
    }

    public function delete(Employee $employee)
    {
    	$employee->delete();
    	return redirect('/employees');
    }
}
