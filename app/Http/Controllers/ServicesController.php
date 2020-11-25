<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function index()
    {
    	$services = Services::get();
    	return view('services.index', compact('services'));
    }

    public function show(Services $service)
    {
    	return view('services.show', compact('service'));
    }

    public function create()
    {
    	return view('services.create', compact('service'));
    }

	public function store()
    {
    	$service = new Services;
    	$service->name = request()->name;
    	$service->charge = request()->charge;
    	$service->save();

    	return redirect('/services');
    }

    public function edit(Services $service)
    {
    	return view('services.edit', compact('service'));
    }

    public function update(Services $service)
    {
    	$service->name = request()->name;
    	$service->charge = request()->charge;
    	$service->save();

    	return redirect('/services');
    }

    public function delete(Services $service)
    {
    	$service->delete();
    	return redirect('/services');
    }
}
