@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h5>Services</h5>
				<a href="/services/create" class="btn waves-effect waves-light black">Create Service<i class="material-icons left">create</i></a><br><br>
				
				<table class="striped">

					<tr>
						<th>ID</th>
						<th>Service Name</th>
						<th>Service Charge</th>
				    </tr>

				    <tr>
				    	<td>
						@foreach($services as $service)
							<a href="/services/{{$service->id}}">{{$service->id}}</a><br>
						@endforeach
					</td>
				   		
				   		<td>
				   			@foreach($services as $service)
				   				{{ $service->service_name }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($services as $service)
				   				{{ $service->service_charge }} <br>
				   			@endforeach
				   		</td>
				   		
				   	</tr>
				 </table>
		    </div>
	    </div>
	</div>
@endsection