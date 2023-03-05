<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductFilterController
{
    public function filterProduct() {
        return view('Products', ['products'=>Products::where('transmission', $_GET['filter_transmission'])->get()]);
    }
}
