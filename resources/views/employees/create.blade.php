@extends('layouts.master')
@section('content')
<div class="container">
<h5>New Employee Form</h5>
<form method="POST" action="/employees">
@csrf

 <div class="form-group">
   <label for="newemployee">Employee Name:</label>
   <input type="text" class="form-control" id="newemployee">
 </div>

 <div class="form-group">
   <label for="newemployee">Age:</label>
   <input type="text" class="form-control" id="newemployee" name="number">
 </div>

 <div class="form-group">
   <label for="newemployee">Contact Number:</label>
   <input type="text" class="form-control" id="newemployee" name="number">
 </div>

 <button type="submit" class="btn btn-primary">Apply</button>

</form>
</div>
@endsection
