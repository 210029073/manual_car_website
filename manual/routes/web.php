<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\BasketController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
#Route for Homepage
//Set the root page '/'
Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::get('/', [PageController::class, 'Home'])->name('home');

Route::get('/home', function(){
    return view('Home');
});

Route::get('/layouts', [PageController::class, 'Layouts']);

Route::get('/car', function(){
    return view('Newproduct');
});

Route::post('/store', [ProductsController::class, 'store']);

Route::get('/homepage', function () {
    return view('homepage');
});
#Route for Contact Us page
Route::get('/contactus', function() {
    return view('contactus');
});
#Route for About Us page
Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/products', [ProductsController::class, 'products']);

Route::get("/login", [LoginController::class, 'login'])->name('loginPage');

Route::get("logout", function () {
    \Illuminate\Support\Facades\Auth::logout();
    return view('Home');
})->name('logout');

Route::get("/basket", [BasketController::class, 'viewBasket']);

Route::get('/register', [RegisterController::class, 'signupPage'])->name('signup');
Route::post('/register/user', [RegisterController::class, 'register'])->name("register");

Route::get('/login/authenticate', [LoginController::class, 'authenticate'])->name("login");
