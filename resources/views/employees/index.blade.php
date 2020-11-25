@extends('layouts.main')
@section('content')
<div class="container">
<h5>Employees</h5>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Employee Name</th>
<th>Employee Age</th>
<th>Employee Contact Number</th>
</tr>
</thead>

<tbody>
@foreach($employees as $employee)
<tr>
<td>{{ $employees->id }}</td>
<td>{{ $employees->name }}</td>
<td>{{ $employees->age }}</td>
<td>{{ $employees->contact_number}}</td>

<td>
<a href="/employees/{{ $employee->id }}">Show</a>
|
<a href="/employees/{{ $employee->id }}/edit">Edit</a>
|
<form method="POST" action="/customer/{{ $customer->id }}">
							@method('DELETE')
							<button type="submit">Delete</button>
						</form>


</td>
</tr>
@endforeach
</tbody>
</table>
@endsectionr