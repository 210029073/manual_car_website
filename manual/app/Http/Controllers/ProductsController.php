<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    //
    public function products(){
        return view('products', ['products'=>Products::all()]);
    }
}
