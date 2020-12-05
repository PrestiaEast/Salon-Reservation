<?php

namespace App\Http\Controllers;

use App\ServiceRendered;
use Illuminate\Http\Request;

class ServicesrenderedController extends Controller
{
    public function index()
    {
        $service_rendereds = ServiceRendered::all();
        return view('servicesrendered.index', compact('service_rendereds'));
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
        $validated_fields = request()->validate([
            'service_id' => 'required|unique:service_rendereds',
            'date' => 'required'
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
        $validated_fields = request()->validate([
            'service_id' => 'required',
            'date' => 'required'           

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
