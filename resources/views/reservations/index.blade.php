@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h5>Reservations</h5>
				<a href="/reservations/create" class="btn waves-effect waves-light black">Create Reservation<i class="material-icons left">create</i></a><br><br>
				
				<table class="striped">

					<tr>
						<th>ID</th>
						<th>Customer ID</th>
						<th>Service ID</th>
						<th>Employee ID</th>
						<th>Reservation Time</th>
					
				    </tr>

				    <tr>
				    	<td>
						@foreach($reservations as $reservation)
							<a href="/reservations/{{$reservation->id}}">{{$reservation->id}}</a><br>
						@endforeach
					</td>
				   		<td>
				   			@foreach($reservations as $reservation)
				   				{{ $reservation->customer_id }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($reservations as $reservation)
				   				{{ $reservation->service_id }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($reservations as $reservation)
				   				{{ $reservation->employee_id }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($reservations as $reservation)
				   				{{ $reservation->reservation_time }} <br>
				   			@endforeach
				   		</td>
				   	</tr>
				 </table>
		    </div>
	    </div>
	</div>
@endsection