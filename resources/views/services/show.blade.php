@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<br>
				<a href="/services/{{ $service->id }}/edit" class="btn waves-effect waves-light blue darken-3">Edit Service<i class="material-icons left">create</i></a><br>
				<br>
				<form action="/services/{{ $service->id }}" method="POST">
					@csrf
					@method('DELETE')
					<button class="btn waves-effect waves-light red" type="submit" name="action">Delete</button>
				</form>
				<br>

				<h5>Service Name: {{ $service->service_name}}</h5>
				<h5>Service Charge: {{ $service->service_charge}}</h5>
				
				
		    </div>
	    </div>
	</div>
@endsection