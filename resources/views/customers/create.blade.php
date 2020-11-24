@extends('layout.main')
@section('content')
  <div class="container">
    <h5>Create Customer</h5>
    <form class="col s12" method="POST" action="/customers">
      @include('layout.errors')
      @csrf
      <div class="row">
        <div class="input-field col s6">
          <input required placeholder="Name"  type="text" class="validate" name="name">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
          <input required placeholder="Age" type="text" class="validate" name="age">
          <label for="age">Age</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input required placeholder="Contact_number" type="text" class="validate" name="contact_number">
          <label for="contact_number">Contact Number</label>
        </div>
      </div>
        <div class="row">
          <div class="input-field col s12" >
              <select multiple name="services_reserved">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Hair Color</option>
                <option value="2">Hair Rebond</option>
                <option value="3">Haircut</option>
                <option value="4">Nail Treatment</option>
              </select>
            <label>Services Reserved</label>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  required placeholder="time_arrived" type="text" class="validate" name="time_arrived">
          <label for="time_arrived">Time Arrived</label>
        </div>
      </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  </form>
</div>
@endsection