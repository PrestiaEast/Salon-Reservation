@extends('layouts.master')
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
<td>{{ $employee->id }}</td>
<td>{{ $employee->name }}</td>
<td>{{ $employee->age }}</td>
<td>{{ $employee->contact_number}}</td>
<td>
<a href="/employees/{{ $employee->id }}">Show</a>
|
<a href="/employees/{{ $employee->id }}/edit">Edit</a>
|
<a href="/employees/{{ $employee->id }}/delete">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection