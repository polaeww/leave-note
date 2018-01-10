<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function auth(){
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            // Authentication passed...
            return redirect()->intended(route('employee.index'));
        }

        return redirect()->back();

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
