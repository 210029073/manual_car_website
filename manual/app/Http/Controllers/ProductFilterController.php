<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductFilterController
{
    public function filterProduct() {
        if(isset($_GET['filter_transmission'])) {
            return view('Products', ['products' => Products::where('transmission', $_GET['filter_transmission'])->get()]);
        }

        return view('Products', ['products' => Products::all()]);
    }
}
