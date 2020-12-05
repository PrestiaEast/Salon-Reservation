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

				<h5>Customer ID: {{ $reservation->customer_id}}</h5>
				<h5>Service ID: {{ $reservation->service_id}}</h5>
				<h5>Employee ID: {{ $reservation->employee_id}}</h5>
				<h5>Reservation Time: {{ $reservation->reservation_time}}</h5>
				
				
		    </div>
	    </div>
	</div>
@endsection
