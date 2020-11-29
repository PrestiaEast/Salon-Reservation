@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h5>Customers</h5>
				<a href="/customers/create" class="btn waves-effect waves-light black">Create Customer<i class="material-icons left">create</i></a><br><br>
				
				<table class="striped">

					<tr>
						<th>ID</th>
						<th>Customer Name</th>
						<th>Age</th>
						<th>Contact Number</th>
						<th>Services Reserved</th>
						<th>Time Arrived</th>
				    </tr>

				    <tr>
				    	<td>
						@foreach($customers as $customer)
							<a href="/customers/{{$customer->id}}">{{$customer->id}}</a><br>
						@endforeach
						</td>
				   		<td>
				   			@foreach($customers as $customer)
				   				{{ $customer->name }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($customers as $customer)
				   				{{ $customer->age }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($customers as $customer)
				   				{{ $customer->contact_number }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($customers as $customer)
				   				{{ $customer->services_reserved }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($customers as $customer)
				   				{{ $customer->time_arrived }} <br>
				   			@endforeach
				   		</td>
				   	</tr>
				 </table>
		    </div>
	    </div>
	</div>
@endsection