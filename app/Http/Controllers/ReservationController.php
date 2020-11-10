<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
    	return view('layout.main');

    }

    public function submitted()
    {
    	return view('layout.submitted');
    }
}
