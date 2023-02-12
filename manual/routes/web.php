<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'index']);

Route::get('/', [PageController::class, 'Home']);

Route::get('/layouts', [PageController::class, 'Layouts']);

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
