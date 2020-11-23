@extends('layouts.main')
@section('content')
	<div class="container">
		<h5>Edit Reservation Form</h5>
		<form method="POST" action="/reservations/{{ $reservation->id }}">
			@method('PUT')
			@csrf
			
			  <div class="form-group">
			    <label for="newreservation">Service Name:</label>
			    <input type="text" class="form-control" id="newreservation" value="{{ $reservation->service_name }}">
			  </div>

			  <div class="form-group">
			    <label for="newreservation">Service Charge:</label>
			    <input type="number" class="form-control" id="newreservation" value="{{ $reservation->service_charge }}">
			  </div>

			  <div class="form-group">
			    <label for="newreservation">Employee Name:</label>
			    <input type="text" class="form-control" id="newreservation" value="{{ $reservation->employee_name }}">
			  </div>

			  <button type="submit" class="btn btn-primary">Apply</button>

		</form>
	</div>
@endsection