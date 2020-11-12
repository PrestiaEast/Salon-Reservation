@extends('layouts.main')
@section('content')
	<div class="container">
		<h5>Reservation</h5>
		<h5>Service Name: {{ $reservation->service_name }}</h5>
		<h5>Service Charge: {{ $reservation->service_charge }}</h5>
		<h5>Employee Name: {{ $reservation->employee_name }}</h5>
	</div>
@endsection