<html>
	<form action="/store" method= 'POST'>
		@include('layouts.errors')
		@csrf
		<input type="text" name='name' required placeholder="Name">
		<input type="text" name='price' required placeholder="Price">
		<button type="submit">Submit</button>
	</form>
</html>