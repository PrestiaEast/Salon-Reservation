@extends('layouts.login')

@section('content')

<div class="container" style="width: 25%">
	<h1 class="center">Register </h1>
	<form action="/register" method="POST">
		@include('layouts.errors')
		@csrf
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Name" id="name" type="text" name="name" >
				<label for="name"></label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Email" id="email" type="email" name="email" >
				<label for="email"></label>
			</div>
		</div>
		
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Password" id="password" type="password" name="password" >
				<label for="password"></label>
			</div>
		</div>

		<div class="center">
			<button  class="btn waves-effect waves-light green"type="submit" name="action">Submit
			<i class="material-icons right">send</i>
			</button>
			<br>
			<br>
		</div>
	</form>	
@endsection