@extends('layouts.master')
@section('content')
<div class="container">
<h5>Edit Employee Form</h5>
<form method="POST" action="/employees/{{ $employee->id }}">
@method('PUT')
@csrf

 <div class="form-group">
   <label for="newemployee">Employee Name:</label>
   <input type="text" class="form-control" id="newemployee" value="{{ $employee->name }}">
 </div>

 <div class="form-group">
   <label for="newemployee">Age:</label>
   <input type="text" class="form-control" id="newemployee" name="number" value="{{ $employee->age }}">
 </div>

 <div class="form-group">
   <label for="newemployee">Contact Number:</label>
   <input type="text" class="form-control" id="newemployee" name="number" value="{{ $employee->contact_number }}">
 </div>

 <button type="submit" class="btn btn-primary">Apply</button>

</form>
</div>
@endsection