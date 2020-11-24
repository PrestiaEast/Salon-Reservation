@extends('layout.main')
@section('content')
	<div class="container">
		<h5>Create Customer</h5>
		<form class="col s12" method="POST" action="/customer">
			@csrf
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder"  type="text" class="validate" name="name">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="age" type="text" class="validate" name="age">
          <label for="age">Age</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input contact_number type="text" class="validate" name="contact_number">
          <label for="contact_number">Contact Number</label>
        </div>
      </div>
        <div class="row">
        <div class="input-field col s12">
          <input services_reserved type="text" class="validate" name="services_reserved">
          <label for="services_reserved">Services Reserved</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  time_arrived type="text" class="validate" name="time_arrived">
          <label for="time_arrived">Time Reserved</label>
        </div>
      </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  </form>
</div>
@endsection