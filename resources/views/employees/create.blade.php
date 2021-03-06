@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h5>Create Employee</h5>
				<form action="/employees" method='POST'>
					@include('layouts.errors')
					@csrf
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Employee Name" id="name" type="text" name='name'>
							<label for="name">Employee Name:</label>
		                </div>
	                </div>
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Age" id="age" type="text" name='age'>
							<label for="age">Age:</label>
		                </div>
	                </div>
	                <div class="row">
						<div class="input-field col s6">
							<input placeholder="Contact Number" id="contact_number" type="text" name='contact_number'>
							<label for="contact_number">Contact Number:</label>
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