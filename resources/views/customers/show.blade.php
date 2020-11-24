@extends('layout.main')
@section('content')
	<div class="container">
		<h4>Customer</h4>
		<h5>Name: {{ $customer->name }}</h5>
		<h5>Age: {{ $customer->age }}</h5>
		<h5>Customer Number: {{ $customer->contact_number }}</h5>
		<h5>Services Reserved: {{ $customer->services_reserved }}</h5>
		<h5>Time Arrived: {{ $customer->time_arrived }}</h5>

@endsection