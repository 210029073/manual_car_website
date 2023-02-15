<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Client\Request;

class RegisterController extends \App\Http\Controllers\Controller
{
    public function signupPage() {
        return view('Sign-up');
    }

    public function register(Request $request) {

    }
}
