@extends('layouts.main')
@section('content')
<div class="container">
<h5>Employees</h5>
<h5>Employee: {{ $employee->name }}</h5>
<h5>Age: {{ $employee->age }}</h5>
<h5>Contact Number: {{ $employee->contact_number }}</h5>
</div>
@endsection