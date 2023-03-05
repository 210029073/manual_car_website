<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductFilterController;
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

Route::post('/drop1',[ProductsController::class,'drop']);

Route::get('/drop', function(){
    return view('drop');
});

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

Route::get('/products', [ProductsController::class, 'products'])->name("products");
Route::get('/product/browse', [ProductFilterController::class, 'filterProduct'])->name("browse_products");

Route::get('/product/{id}', [ProductsController::class, 'singleProduct'])->name("product");

Route::get("/login", [LoginController::class, 'login'])->name('loginPage');

Route::get("logout", function () {
    \Illuminate\Support\Facades\Auth::logout();
    return view('homepage');
})->name('logout');

#basket page
Route::get("/basket", [BasketController::class, 'viewBasket'])->name("basket");
Route::get("/basket/delete", [BasketController::class, 'deleteItemFromBasket']);

Route::post("/products/add", [BasketController::class, 'addProductsToBasket']);
Route::get('/register', [RegisterController::class, 'signupPage'])->name('signup');
Route::post('/register/user', [RegisterController::class, 'register'])->name("register");

Route::get('/login/authenticate', [LoginController::class, 'authenticate'])->name("login");

Route::get("/basket/checkout", [OrderController::class, 'proceedCheckout'])->name("checkout");
Route::get("/order/past", [OrderController::class, 'viewPastOrders'])->name("pastOrder");
