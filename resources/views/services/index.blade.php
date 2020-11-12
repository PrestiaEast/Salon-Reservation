@extends('layouts.main')
@section('content')
	<div class="container">
		<h5>Services</h5>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Service Name</th>
					<th>Service Charge</th>
					<th>Actions</th>
				</tr>
			</thead>

			<tbody>
				@foreach($services as $service)
				<tr>
					<td>{{ $service->id }}</td>
					<td>{{ $service->name }}</td>
					<td>{{ $service->charge }}</td>
					<td>
						<a href="/services/{{ $service->id }}">Show</a>
						|
						<a href="/services/{{ $service->id }}/edit">Edit</a>
						|
						<a href="/services/{{ $service->id }}/delete">Delete</a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection