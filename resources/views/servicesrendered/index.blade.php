@extends('layouts.main')
@section('content')
	<div class="container">
		<h5>Service rendered</h5>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Service ID</th>
					<th>Customer ID</th>
					<th>Month</th>
					<th>Service Charge</th>
				</tr>
			</thead>
			<tbody>
				@foreach($servicesrendered as ServiceRendered)
					<tr>
						<td>{{ $ServiceRendered->id }}</td>
						<td>{{ $ServiceRendered->service_id }}</td>
						<td>{{ $ServiceRendered->customer_id }}</td>
						<td>{{ $ServiceRendered->month }}</td>
						<td>{{ $ServiceRendered->service_charge }}</td>

						<a href="/servicesrendered/{{ ServiceRendered->id }}/edit">Edit</a>
						<form method='POST' action='/servicesrendered/{{ ServiceRendered->id }}'>
							@method('DELETE')
							@csrf
							<button type="submit">Delete</button>
						</form>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>


@endsection