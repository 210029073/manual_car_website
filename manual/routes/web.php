<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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