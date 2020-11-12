@extends('layouts.main')
@section('content')
	<div class="container">
		<h5>Services</h5>
		<h5>Service: {{ $service->name }}</h5>
		<h5>Price: {{ $service->charge }}</h5>
	</div>
@endsection