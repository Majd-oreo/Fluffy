<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the login form
    public function login()
    {
        return view('login');
    }

    // Show the signup form
    public function signup()
    {
        return view('signup');
    }

    // Handle login form submission
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);
  $credentials = $request->only(['email', 'password']); 
  if(Auth::attempt($credentials)){
    return redirect()->intended(route('service'));
  }
  return redirect(route('login'))->with('error',"login details are not valid");
   }

    // Handle signup form submission
    public function signupPost(Request $request)
    {
    }
}
