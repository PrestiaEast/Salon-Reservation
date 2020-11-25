<html>
<form maction="register" method = 'POST'>
@include('layouts.errors')

@csrf
<input type="text" name='name' required placeholder="Employee Name">
<input type="number" name='age' required placeholder="Age">
<input type="number" name='contact_number' required placeholder="Contact Number">
<button type="submit">Submit</button>
</form>
</html