<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function login()
    {
        request()->validate([
        	'email' =>'reqused',
        	'password' => 'reqused'
        ]);

    	$credentials = ['email' => request()-> email,'[password'=> request()->password]; 
    	if (Auth::attempt($credentials)){
    		return redirect('/dashboard');
    	}
    	return back()->withErrors([
           'credentials' => 'you have error in email or password '
    	]);
    	
    }
}
