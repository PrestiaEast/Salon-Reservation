@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h5>Update Services</h5>
				<form action="/services/{{ $service->id }}" method='POST'>
					@method('PUT')
					@include('layouts.errors')
					@csrf
					
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Service Name" id="service_name" type="text" name='service_name' value='{{ $service->service_name }}'>
							<label for="service_name">Service Name:</label>
		                </div>
	                </div>
	                <div class="row">
						<div class="input-field col s6">
							<input placeholder="Service Charge" id="service_charge" type="text" name='service_charge' value='{{ $service->service_charge }}'>
							<label for="service_charge">Service Charge:</label>
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