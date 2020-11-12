@extends('layouts.main')
@section('content')
	<div class="container">
		<h5>Edit Reservation Form</h5>
		<form method="POST" action="/reservation/{{ $reservation->id }}">
			@method('PUT')
			@csrf
			
			  <div class="form-group">
			    <label for="newreservation">Service Name:</label>
			    <input type="text" class="form-control" id="newreservation" value="{{ $reservation->name }}">
			  </div>

			  <div class="form-group">
			    <label for="newreservation">Service Charge:</label>
			    <input type="text" class="form-control" id="newreservation" name="number" value="{{ $reservation->name }}">
			  </div>

			  <div class="form-group">
			    <label for="newreservation">Employee Name:</label>
			    <input type="text" class="form-control" id="newreservation" value="{{ $reservation->name }}">
			  </div>

			  <button type="submit" class="btn btn-primary">Apply</button>

		</form>
	</div>
@endsection