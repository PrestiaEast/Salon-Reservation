<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //get all
    public function index()
    {
    	$customers = Customer::all();
    	return view('customers.index', compact('customers'));
	} 

	public function show(Customer $customer)
	{
		return view('customers.show', compact('customer'));
	}
	
	public function create()
	{
		return view('customers.create');
	}

	public function store()
	{
		//$customer = new Customer;
		//$customer->name = request()->name;
		//$customer->age = request()->age;
		//$customer->contact_number = request()->contact_number;
		//$customer->services_reserved = request()->services_reserved;
		//$customer->save();

		$validated_fields = request()->validate([
			'reservation_id' => 'required',
			'name' => 'required',
			'age' => 'required',
			'contact_number' => 'required|unique:customers',
			'services_reserved' => 'required',
			'time_arrived' => 'required'
		]);
		//add customer in database
		$customer = Customer::create($validated_fields);

		return redirect('/customers');
	}

	public function edit(Customer $customer)
	{
		return view('customers.edit', compact('customer'));
	}

	public function update(Customer $customer)
	{
		//$customer->reservation_id = request()->reservation_id;
		//$customer->name = request()->name;
		//$customer->age = request()->age;
		//$customer->contact_number = request()->contact_number;
		//$customer->services_reserved = request()->services_reserved;
		//$customer->time_arrived = request()->time_arrived;
		//$customer->save();

		$validated_fields = request()->validate([
            'reservation_id' => 'required',
            'name' => 'required', 
            'age' => 'required',  
            'contact_number' => 'required',  
            'services_reserved' => 'required',
            'name' => 'required', 
            'time_arrived' => 'required'     

        ]);

        $customer->update($validated_fields);

		return redirect('/customers/'.$customer->id);
	}

	public function delete(Customer $customer)
	{
		$customer->delete();
		return redirect('/customers');
	}
}
