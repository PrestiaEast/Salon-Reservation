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
        $validated_fields = request()->validate([
            'customer_id' => 'required',
            'service_id' => 'required',
            'employee_id' => 'required',
            'reservation_time' => 'required'
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
        $validated_fields = request()->validate([
            'customer_id' => 'required',
            'service_id' => 'required',
            'employee_id' => 'required',
            'reservation_time' => 'required'           

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
