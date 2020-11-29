@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<br>
				<a href="/reservations/{{ $reservation->id }}/edit" class="btn waves-effect waves-light blue darken-3">Edit Reservation<i class="material-icons left">create</i></a><br>
				<br>
				<form action="/reservations/{{ $reservation->id }}" method="POST">
					@csrf
					@method('DELETE')
					<button class="btn waves-effect waves-light red" type="submit" name="action">Delete</button>
				</form>
				<br>

				<h5>Service ID: {{ $reservation->service_id}}</h5>
				<h5>Service Name: {{ $reservation->service_name}}</h5>
				<h5>Service Charge: {{ $reservation->service_charge}}</h5>
				<h5>Employee Name: {{ $reservation->employee_name}}</h5>
				
				
		    </div>
	    </div>
	</div>
@endsection