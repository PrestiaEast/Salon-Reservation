<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
    	$reservation = Reservation::get();
    	return view ('reservation.index', compact('reservation'));
    }

    public function show(Reservation $reservation)
    {
    	return view ('reservation.show', compact('reservation'));
    }

    public function create()
    {
    	return view('reservation.create', compact('reservation'));
    }

    public function store()
    {
    	$reservation = new Reservation;
    	$reservation->service_name = request()->service_name;
    	$reservation->service_charge = request()->service_charge;
    	$reservation->employee_name = request()->employee_name;
    	$reservation->save();

    	return redirect('/reservation');
    }

    public function edit(Reservation $reservation)
    {
    	return view('reservation.edit', compact('reservation'));
    }

    public function update(Reservation $reservation)
    {
    	$reservation->service_name = request()->service_name;
    	$reservation->service_charge = request()->service_charge;
    	$reservation->employee_name = request()->employee_name;
    	$reservation->save();

    	return redirect('/reservation');
    }

    public function delete (Reservation $reservation)
    {
    	$reservation->delete();
    	return redirect('/reservation');
    }


}
