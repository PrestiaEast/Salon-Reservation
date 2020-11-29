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
							<input placeholder="Service Name" id="service_id" type="text" name='service_id' value='{{ $reservation->service_id }}'>
							<label for="service_id">Service ID:</label>
		                </div>
	                </div>
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Service Name" id="service_name" type="text" name='service_name' value='{{ $reservation->service_name }}'>
							<label for="service_name">Service Name:</label>
		                </div>
	                </div>
	                <div class="row">
						<div class="input-field col s6">
							<input placeholder="Service Charge" id="service_charge" type="text" name='service_charge' value='{{ $reservation->service_charge }}'>
							<label for="service_charge">Service Charge:</label>
		                </div>
	                </div>
	                <div class="row">
						<div class="input-field col s6">
							<input placeholder="Employee Name" id="employee_name" type="text" name='employee_name' value='{{ $reservation->employee_name }}'>
							<label for="employee_name">Employee Name</label>
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