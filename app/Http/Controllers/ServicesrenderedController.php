<?php

namespace App\Http\Controllers;

use App\ServiceRendered;
use Illuminate\Http\Request;

class ServicesrenderedController extends Controller
{
    public function index()
    {
        $servicerendereds = ServiceRendered::all();
        return view('servicesrendered.index', compact('servicerendereds'));
    }

    public function show(ServiceRendered $servicerendered)
    {
        return view('servicesrendered.show', compact('servicerendered'));
    }

    public function create()
    {
        return view('servicesrendered.create');
    }

    public function store()
    {
        //$servicerendered = new ServiceRendered;
        //$servicerendered->service_id = request()->service_id;
        //$servicerendered->customer_id = request()->customer_id;
        //$servicerendered->service_name = request()->service_name;
        //$servicerendered->service_charge = request()->service_charge;
        //$servicerendered->month = request()->month;
        //$servicerendered->save();

        $validated_fields = request()->validate([
            'service_id' => 'required|unique:service_rendereds',
            'customer_id' => 'required|unique:service_rendereds',
            'service_name' => 'required',
            'service_charge' => 'required',
            'month' => 'required'
        ]);

        $servicerendered = ServiceRendered::create($validated_fields);

        return redirect('/service-rendered');
    }

    public function edit(ServiceRendered $servicerendered)
    {
        return view('servicesrendered.edit', compact('servicerendered'));
    }

    public function update (ServiceRendered $servicerendered)
    {
        //$servicerendered->service_id = request()->service_id;
        //$servicerendered->customer_id = request()->customer_id;
        //$servicerendered->service_name = request()->service_name;
        //$servicerendered->service_charge = request()->service_charge;
        //$servicerendered->month = request()->month;
        //$servicerendered->save();

        $validated_fields = request()->validate([
            'service_id' => 'required',
            'customer_id' => 'required',
            'service_name' => 'required',
            'service_charge' => 'required',
            'month' => 'required'           

        ]);

        $servicerendered->update($validated_fields);

        return redirect('/service-rendered/'.$servicerendered->id);
    }

    public function delete(ServiceRendered $servicerendered)
    {
        $servicerendered->delete();
        return redirect('/service-rendered');
    }
}
