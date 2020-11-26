@extends('layouts.main')
@section('content')
	<div class="container">
		<h5>Create Service Rendered Form</h5>
		<form class="col s12" method="POST" action="/servicesrendered">
			@include('layout.errors')
			@csrf
  			<div class="form-group">
			    <label for="exampleInputEmail1">ServicesID</label>
			    <select class="custom-select" name="service_id">
			    	@foreach($servicesID as serviceID)
			    		<option value="{{ serviceID }}">{{ serviceID }}</option>
			    	@endforeach
				</select>

			</div>

		  	<div class="form-group">
			    <label for="exampleInputPassword1">CustomerID</label>
			    <input required placeholder="CustomerID" type="text" class="validate" id="exampleInputPassword1" name="customer_id"> 
		  	</div>

		  	<div class="form-group">
			    <label for="exampleInputPassword1">Month</label>
			    <input required placeholder="Month" type="text" class="validate" id="exampleInputPassword1" name="month">
		  	</div>


			<div class="form-group">
			    <label for="exampleInputPassword1">ServiceCharge/label>
			    <input required placeholder="ServiceCharge"type="text" class="validate" id="exampleInputPassword1" name="service_charge>"
		  	</div>

		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>


@endsection