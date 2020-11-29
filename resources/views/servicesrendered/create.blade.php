@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h5>Create Service Rendered</h5>
				<form action="/service-rendered" method='POST'>
					@include('layouts.errors')
					@csrf
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Service ID" id="service_id" type="number" name='service_id'>
							<label for="service_id">Service ID:</label>
		                </div>
	                </div>
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Customer ID" id="customer_id" type="number" name='customer_id'>
							<label for="customer_id">Customer ID:</label>
		                </div>
	                </div>
	                <div class="row">
						<div class="input-field col s6">
							<input placeholder="Service Name" id="service_name" type="text" name='service_name'>
							<label for="service_name">Service Name:</label>
		                </div>
	                </div>
	                <div class="row">
						<div class="input-field col s6">
							<input placeholder="Service Charge" id="service_charge" type="text" name='service_charge'>
							<label for="service_charge">Service Charge:</label>
		                </div>
	                </div>
	                <div class="row">
						<div class="input-field col s6">
							<input placeholder="Month" id="month" type="text" name='month'>
							<label for="month">Month</label>
		                </div>
	                </div>
	                <div class="row">
	                	<div class="col s12">
	                		<button class="btn waves-effect waves-light orange darken-3" type="submit" name="action">Submit
	                			<i class="material-icons right">send</i>
	                		</button>
	                	</div>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>
@endsection