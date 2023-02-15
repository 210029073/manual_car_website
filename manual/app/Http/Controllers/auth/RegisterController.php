<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;


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

        //should redirect to the homepage.
        return redirect()->intended($this->redirectTo);
    }
}
