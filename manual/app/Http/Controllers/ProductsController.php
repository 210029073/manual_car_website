<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
/**
 * Controller responsible for Products page.
 * @author @Victorymp <200174572@aston.ac.uk>
 * @since 06/02/2023
 * @version 1.0
*/
    public function products(){
        return view('products', ['products'=>Products::all()]);
    }
}
