<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
    	$services = Service::get();
    	return view('services.index', compact('services'));
    }

    public function show(Service $service)
    {
    	return view('services.show', compact('service'));
    }

    public function create()
    {
    	return view('services.create', compact('service'));
    }

	public function store()
    {
    	$service = new Service;
    	$service->name = request()->name;
    	$service->charge = request()->charge;
    	$service->save();

    	return redirect('/services');
    }

    public function edit(Service $service)
    {
    	return view('services.edit', compact('service'));
    }

    public function update(Service $service)
    {
    	$service->name = request()->name;
    	$service->charge = request()->charge;
    	$service->save();

    	return redirect('/services');
    }

    public function delete(Service $service)
    {
    	$service->delete();
    	return redirect('/services');
    }


}
