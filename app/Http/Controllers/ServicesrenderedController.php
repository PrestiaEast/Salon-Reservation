<?php

namespace App\Http\Controllers;

use App\ServiceRendered;
use Illuminate\Http\Request;

class ServicesrenderedController extends Controller
{
    
    public function index()
    {
    	$servicesrendered = ServiceRendered::get();
    	return view('servicesrendered.index', compact('servicesrendered'));
    }

    public function create()
    {
    	$servicesID = ['001', '002', '003', '004', '005'];
    	return view('servicesrendered.create', compact('servicesID'));
    }

    public function store()
    {
    	//$servicerendered = new ServicesRendered;
    	//$servicerendered->service_id = request()->service_id;
    	//$servicerendered->customer_id = request()->customer_id;
    	//$servicerendered->month = request()->month;
    	//$servicerendered->service_charge = request()->service_charge;
    	//$servicerendered->save();

        $validated_fields = request()->validate([
            'service_id' => 'required',
            'customer_id' => 'required',
            'month' => 'required|unique:customers',
            'service_charge' => 'required'

        ]);

        //add servicerendered to the database
        $servicerendered = ServiceRendered::create($validated_fields);


    	return redirect('/servicesrendered');
    }

    public function edit(ServiceRendered $servicerendered)
    {
    	$servicesID = ['001', '002', '003', '004', '005'];
    	return view('servicesrendered.edit', compact('servicerendered', 'servicesID'));
    }

    public function update(ServiceRendered $servicerendered)
    {
    	$servicerendered->update([
    		'service_id' => request()->service_id,
    		'customer_id' = request()->customer_id,
    		'month' = request()->month,
    		'service_charge' = request()->service_charge
    	]);

    	return redirect('/servicesrendered');
   } 

   public function delete(ServiceRendered $servicerendered)
   {
   		$servicerendered->delete();
   		return redirect('/servicesrendered');
   } 
   }
}

