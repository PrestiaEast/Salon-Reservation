@extends('layouts.master')

@section('content')
	<div class="container">
		<br><br>
		<br><br>
		<br>
		<h1 class="header center orange-text"> Welcome {{ auth()->user()->name }}</h1>
	</div>
@endsection