<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store()
    {
        //$reservation = new Reservation;
        //$reservation->service_id = request()->service_id;
        //$reservation->service_name = request()->service_name;
        //$reservation->service_charge = request()->service_charge;
        //$reservation->employee_name = request()->employee_name;
        //$reservation->save();

        $validated_fields = request()->validate([
            'service_id' => 'required|unique:reservations',
            'service_name' => 'required',
            'service_charge' => 'required',
            'employee_name' => 'required'
        ]);
       
        $reservation = Reservation::create($validated_fields);

        return redirect('/reservations');
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Reservation $reservation)
    {
        //$reservation->service_id = request()->service_id;
        //$reservation->service_name = request()->service_name;
        //$reservation->service_charge = request()->service_charge;
        //$reservation->employee_name = request()->employee_name;
        //$reservation->save();

        $validated_fields = request()->validate([
            'service_id' => 'required',
            'service_name' => 'required',
            'service_charge' => 'required',
            'employee_name' => 'required'           

        ]);

        $reservation->update($validated_fields);

        return redirect('/reservations/'.$reservation->id);
    }

    public function delete(Reservation $reservation)
    {
        $reservation->delete();
        return redirect('/reservations');
    }
}
