@extends('layout.main')
@section('content')
	<div class="container">
		<h5>Customer</h5>
		<table class="striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Reservation ID</th>
					<th>Name</th>
					<th>Age</th>
					<th>Contact Number</th>
					<th>Services Reserved</th>
					<th>Time Arrived</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($customers as $customer)
				<tr>
					<td>{{ $customer->id }}</td>
					<td>{{ $customer->reservation_id }}</td>
					<td>{{ $customer->name }}</td>
					<td>{{ $customer->age }}</td>
					<td>{{ $customer->contact_number }}</td>
					<td>{{ $customer->services_reserved }}</td>
					<td>{{ $customer->time_arrived }}</td>
					<td>
						<a href="/customer/{{ $customer->id}}">Show</a>
						|
						<a href="/customer/{{ $customer->id}}/edit">Edit</a>
						<form method="POST" action="/customer/{{ $customer->id }}">
							@method('DELETE')
							<button type="submit">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
@endsection