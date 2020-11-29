<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function login()
    {
    	// validate the form
    	request()->validate([
    		'email' =>'required',
    		'password' => 'required'
    	]);
    	// check for email address and the password
    	// key value pair array of column to match the value
    	// email => request()->email
    	// password => request()->password
    	$credentials = ['email' => request()->email, 'password' => request()->password];
    	if(Auth::attempt($credentials)) {
    		return redirect ('/dashboard');
    	}
    	return back()->withErrors([
    		'credentials' => 'Incorrect email or password'
    	]);
    }

    public function register()
    {
    	return view('register');
    }

    public function store()
    {
    	//validate the form
    	$validated_fields = request()->validate([
    		'name' => 'required',
    		'email' => 'required|unique:users',
    		'password' => 'required'
    	]);
    	// add the user to the database
    	$validated_fields['password'] = bcrypt($validated_fields['password']);
    	$user = User::create($validated_fields);

    	return redirect('/login');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
