@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h5>Update Reservation</h5>
				<form action="/reservations/{{ $reservation->id }}" method='POST'>
					@method('PUT')
					@include('layouts.errors')
					@csrf
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Customer ID" id="customer_id" type="text" name='customer_id' value='{{ $reservation->customer_id }}'>
							<label for="customer_id">Customer ID:</label>
		                </div>
	                </div>
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Service ID" id="service_id" type="text" name='service_id' value='{{ $reservation->service_id }}'>
							<label for="service_id">Service ID:</label>
		                </div>
	                </div>
	                <div class="row">
						<div class="input-field col s6">
							<input placeholder="Employee ID" id="employee_id" type="text" name='employee_id' value='{{ $reservation->employee_id }}'>
							<label for="employee_id">Employee ID</label>
		                </div>
	                </div>
	                <div class="row">
						<div class="input-field col s6">
							<input placeholder="Reservation Time" id="reservation_time" type="text" name='reservation_time' value='{{ $reservation->reservation_time }}'>
							<label for="reservation_time">Reservation Time</label>
		                </div>
	                </div>
	                <div class="row">
	                	<div class="col s12">
	                		<button class="btn waves-effect waves-light orange darken-3" type="submit" name="action">Submit
	                			<i class="material-icons right">send</i>
	                		</button>
	                	</div>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>
@endsection