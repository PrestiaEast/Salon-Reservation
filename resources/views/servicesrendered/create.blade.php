@extends('layouts.main')
@section('content')
	<div class="container">
		<h5>Creata Service Rendered Form</h5>
		<form method="POST" action="/servicesrendered">
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
			    <input type="text" class="form-control" id="exampleInputPassword1" name="customer_id"> 
		  	</div>

		  	<div class="form-group">
			    <label for="exampleInputPassword1">Month</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="month">
		  	</div>


			<div class="form-group">
			    <label for="exampleInputPassword1">ServiceCharge/label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="service_charge>"
		  	</div>

		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>


@endsection