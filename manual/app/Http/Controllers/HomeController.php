<?php

namespace App\Http\Controllers;

use Ramsey\Collection\Set;

class HomeController extends Controller
{
    /**
     * This will simply redirect to the homepage
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return A new view holding the homepage
     */
    public function index() {
        $set = new Set(Product::class);
        $product = new Product("550d", "BMW", "2015 BMW 5 Series 550d M Sport Diesel 5.0 litre engine",12565.34);
        $product1 = new Product("320d", "BMW", "2012 BMW 3 Series 320d Normal Diesel 3.0 litre engine",12565.34);

        $set->add($product);
        $set->add($product1);

//        dd($set);
        $value = cookie('I have a cookie', 7);

//        dd($value);
        return view('homepage');
    }

}
