@extends('layouts.main')
@section('content')
	<div class="container">
		<h5>New Reservation Form</h5>
		<form method="POST" action="/reservations">
			@csrf
			
			  <div class="form-group">
			    <label for="newreservation">Service Name:</label>
			    <input type="text" class="form-control" id="newreservation">
			  </div>

			  <div class="form-group">
			    <label for="newreservation">Service Charge:</label>
			    <input type="number" class="form-control" id="newreservation">
			  </div>

			  <div class="form-group">
			    <label for="newreservation">Employee Name:</label>
			    <input type="text" class="form-control" id="newreservation">
			  </div>

			  <button type="submit" class="btn btn-primary">Apply</button>

		</form>
	</div>
@endsection