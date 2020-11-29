@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h5>Create Customer</h5>
        <form action="/customers" method='POST'>
          @include('layouts.errors')
          @csrf
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Reservation Id" id="reservation_id" type="text" name='reservation_id'>
              <label for="reservation_id">Reservation ID:</label>
                    </div>
                  </div>
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Customer Name" id="name" type="text" name='name'>
              <label for="customer_name">Customer Name:</label>
                    </div>
                  </div>
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Age" id="age" type="text" name='age'>
              <label for="age">Age:</label>
                    </div>
                  </div>
                  <div class="row">
            <div class="input-field col s6">
              <input placeholder="Contact Number" id="contact_number" type="text" name='contact_number'>
              <label for="contact_number">Contact Number:</label>
                    </div>
                  </div>
                  <div class="row">
            <div class="input-field col s6">
              <input placeholder="Services Reserved" id="services_reserved" type="text" name='services_reserved'>
              <label for="services_reserved">Services Reserved</label>
                    </div>
                  </div>
                  <div class="row">
            <div class="input-field col s6">
              <input placeholder="Time Arrived" id="time_arrived" type="text" name='time_arrived'>
              <label for="time_arrived">Time Arrived</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12">
                      <button class="btn waves-effect waves-light orange darken-3" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                      </button>
                    </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
@endsection