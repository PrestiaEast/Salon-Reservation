@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<br>
				<a href="/employees/{{ $employee->id }}/edit" class="btn waves-effect waves-light blue darken-3">Edit Employee<i class="material-icons left">create</i></a><br>
				<br>
				<form action="/employees/{{ $employee->id }}" method="POST">
					@csrf
					@method('DELETE')
					<button class="btn waves-effect waves-light red" type="submit" name="action">Delete</button>
				</form>
				<br>

				<h5>Employee Name: {{ $employee->name}}</h5>
				<h5>Age: {{ $employee->age}}</h5>
				<h5>Contact Number: {{ $employee->contact_number}}</h5>
				
				
				
		    </div>
	    </div>
	</div>
@endsection