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
	                <div class="row">
						<div class="input-field col s6">
							<input placeholder="Date" id="date" type="text" name='date'>
							<label for="date">Date</label>
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