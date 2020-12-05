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
						<th>Date</th>
					
				    </tr>

				    <tr>
				    	<td>
						@foreach($service_rendereds as $servicerendered)
							<a href="/service-rendered/{{$servicerendered->id}}">{{$servicerendered->id}}</a><br>
						@endforeach
					</td>
				   		<td>
				   			@foreach($service_rendereds as $servicerendered)
				   				{{ $servicerendered->service_id }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($service_rendereds as $servicerendered)
				   				{{ $servicerendered->date }} <br>
				   			@endforeach
				   		</td>
				   	</tr>
				 </table>
		    </div>
	    </div>
	</div>
@endsection