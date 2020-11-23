@extends('layouts.main')
@section('content')
	<div class="container">
		<h5>Reservation</h5>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Service Name</th>
					<th>Service Charge</th>
					<th>Employee Name</th>
				</tr>
			</thead>

			<tbody>
				@foreach($reservations as $reservation)
				<tr>
					<td>{{ $reservation->id }}</td>
					<td>{{ $reservation->service_name }}</td>
					<td>{{ $reservation->service_charge }}</td>
					<td>{{ $reservation->employee_name }}</td>
					<td>
						<a href="/reservations/{{ $reservation->id }}">Show</a>
						|
						<a href="/reservations/{{ $reservation->id }}/edit">Edit</a>
						|
						<a href="/reservations/{{ $reservation->id }}/delete">Delete</a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection