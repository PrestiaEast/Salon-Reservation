@extends('layouts.main')
@section('content')
	<div class="container">
		<h5>New Service Form</h5>
		<form method="POST" action="/services">
			@csrf
			
			  <div class="form-group">
			    <label for="newservice">Service Name:</label>
			    <input type="text" class="form-control" id="newservice">
			  </div>

			  <div class="form-group">
			    <label for="newservice">Price:</label>
			    <input type="text" class="form-control" id="newservice" name="number">
			  </div>

			  <button type="submit" class="btn btn-primary">Apply</button>

		</form>
	</div>
@endsection