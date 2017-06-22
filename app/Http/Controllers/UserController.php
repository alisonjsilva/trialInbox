<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use Auth;
use Redirect;

class UserController extends Controller
{
    public function loginForm() {
        
        if(Auth::user()) {
            return Redirect::route('index'); 
        }
        
        return view('login');
    }
    
    public function doLogin()
    {
        $email=Input::get('email');
        $password=Input::get('password');
    
    if (Auth::attempt(array('email' => $email, 'password' => $password)))
    {
        return Redirect::route('index');
    
    } else{
    
      return Redirect::route('loginPage')
        ->with('error','Please check your password and email');
    }
    }
    
    public function doLogout()
    {
        Auth::logout();
        return Redirect::route('loginPage');
    }
}
