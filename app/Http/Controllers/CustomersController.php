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
		$validated_fields = request()->validate([
			'name' => 'required',
			'age' => 'required',
			'contact_number' => 'required|unique:customers',
			'service_reserved' => 'required',
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
		$validated_fields = request()->validate([
            'name' => 'required', 
            'age' => 'required',  
            'contact_number' => 'required',  
            'service_reserved' => 'required',     

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
