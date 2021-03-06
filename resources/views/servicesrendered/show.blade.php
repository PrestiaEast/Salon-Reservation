@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<br>
				<a href="/service-rendered/{{ $servicerendered->id }}/edit" class="btn waves-effect waves-light blue darken-3">Edit Service Rendered<i class="material-icons left">create</i></a><br>
				<br>
				<form action="/service-rendered/{{ $servicerendered->id }}" method="POST">
					@csrf
					@method('DELETE')
					<button class="btn waves-effect waves-light red" type="submit" name="action">Delete</button>
				</form>
				<br>

				<h5>Service ID: {{ $servicerendered->service_id}}</h5>
				<h5>Date: {{ $servicerendered->date}}</h5>
				
				
		    </div>
	    </div>
	</div>
@endsection