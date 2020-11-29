@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h5>Employees</h5>
				<a href="/employees/create" class="btn waves-effect waves-light black">Create Employee<i class="material-icons left">create</i></a><br><br>
				
				<table class="striped">

					<tr>
						<th>ID</th>
						<th>Employee Name</th>
						<th>Age</th>
						<th>Contact Number</th>
					
				    </tr>

				    <tr>
				    	<td>
						@foreach($employees as $employee)
							<a href="/employees/{{$employee->id}}">{{$employee->id}}</a><br>
						@endforeach
					</td>
				   		<td>
				   			@foreach($employees as $employee)
				   				{{ $employee->name }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($employees as $employee)
				   				{{ $employee->age }} <br>
				   			@endforeach
				   		</td>
				   		<td>
				   			@foreach($employees as $employee)
				   				{{ $employee->contact_number }} <br>
				   			@endforeach
				   		</td>
				   		
				   	</tr>
				 </table>
		    </div>
	    </div>
	</div>
@endsection