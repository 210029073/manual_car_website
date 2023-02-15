<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;
    public function signupPage() {
        return view('Sign-up');
    }

    public function register(Request $request) {
        User::create(
            [
                'firstName' => $request->post('firstName'),
                'lastName' => $request->post('lastName'),
                'email' => $request->post('email'),
                'password' => Hash::make($request->post('password')),
                'address' => $request->post('address'),
                'mobile' => $request->post('mobile')
            ]
        );
    }
}
