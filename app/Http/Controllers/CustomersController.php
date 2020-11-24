<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //get all
    public function index()
    {
    	$customers = Customer::get();
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
		$customer = new Customer;
		$customer->name = request()->name;
		$customer->age = request()->age;
		$customer->contact_number = request()->contact_number;
		$customer->services_reserved = request()->services_reserved;
		$customer->save();

		return redirect('/customer');
	}

	public function edit(Customer $customer)
	{
		return view('customers.edit', compact('customer'));
	}

	public function update(Customer $customer)
	{
		$customer->name = request()->name;
		$customer->age = request()->age;
		$customer->contact_number = request()->contact_number;
		$customer->services_reserved = request()->services_reserved;
		$customer->save();

		return redirect('/customer');
	}

	public function delete(Customer $customer)
	{
		$customer->delete();
		return redirect('/customer');
	}
}
