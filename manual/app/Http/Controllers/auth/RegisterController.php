<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


/**
 * Controller responsible for registering the customer details.
 * @author Ibrahim Ahmad <210029073@aston.ac.uk>
 * @since 15/02/2023
 * @version 1.0
*/
class RegisterController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * This should return the sign up page.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
    */
    public function signupPage() {
        if(Auth::check()) {
            return redirect()->back();
        }
        return view('Sign-up');
    }

    /**
     * This should register a new user account using Eloquent ORM, which
     * should automatically redirect to the homepage
     *
     * If successful, it should automatically register the user and redirect to the homepage.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
    */
    public function register(Request $request) {
        //add validations
        $check = $request->validate(
            [
                'firstName' => 'required|min:1|max:33',
                'lastName' => 'required|min:1|max:33',
                'email' => 'required|email|unique:App\Models\User,email',
                'password' => 'required|min:8',
                'address' => 'required',
                'mobile' => 'required'
            ]
        );

//        dd($check);

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

        $credentials =
            [
            "email" => ['required',$request->post('email')],
            "password" => $request->post('password'),
        ];
        Auth::attempt($credentials);

        //should redirect to the homepage.
        return redirect()->intended('homepage');
    }
}
