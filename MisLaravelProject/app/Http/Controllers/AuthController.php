<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsValid;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function dashboard() {
        return view('dashboard');
    }

    public function signin(Request $request) {
        $data =  $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('dashboard');
        } else {
            return view('login');
        }
    }

    public function signup() {

    }

}
