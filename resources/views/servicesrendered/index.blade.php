@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h5>Services Rendered</h5>
				<a href="/service-rendered/create" class="btn waves-effect waves-light black">Create Service Rendered<i class="material-icons left">create</i></a><br><br>
				
				<table class="striped">

					<tr>
						<th>ID</th>
						<th>Service ID</th>
						<th>Customer ID</th>
						<th>Service Name</th>
						<th>Service Charge</th>
						<th>Month</th>
					
				    </tr>

				    <tr>
				    	<td>
						@foreach($servicerendereds as $servicerendered)
							<a href="/service-rendered/{{$servicerendered->id}}">{{$servicerendered->id}}</a><br>
						@endforeach
					</td>
				   		<td>
				   			@foreach($servicerendereds as $servicerendered)
				   				{{ $servicerendered->service_id }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($servicerendereds as $servicerendered)
				   				{{ $servicerendered->customer_id }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($servicerendereds as $servicerendered)
				   				{{ $servicerendered->service_name }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($servicerendereds as $servicerendered)
				   				{{ $servicerendered->service_charge }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($servicerendereds as $servicerendered)
				   				{{ $servicerendered->month }} <br>
				   			@endforeach
				   		</td>
				   	</tr>
				 </table>
		    </div>
	    </div>
	</div>
@endsection