@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<br>
				<a href="/customers/{{ $customer->id }}/edit" class="btn waves-effect waves-light blue darken-3">Edit Customer<i class="material-icons left">create</i></a><br>
				<br>
				<form action="/customers/{{ $customer->id }}" method="POST">
					@csrf
					@method('DELETE')
					<button class="btn waves-effect waves-light red" type="submit" name="action">Delete</button>
				</form>
				<br>

				<h5>Reservation ID: {{ $customer->reservation_id }}</h5>
				<h5>Name: {{ $customer->name }}</h5>
				<h5>Age: {{ $customer->age }}</h5>
				<h5>Customer Number: {{ $customer->contact_number }}</h5>
				<h5>Services Reserved: {{ $customer->services_reserved }}</h5>
				<h5>Time Arrived: {{ $customer->time_arrived }}</h5>
						
		    </div>
	    </div>
	</div>
@endsection