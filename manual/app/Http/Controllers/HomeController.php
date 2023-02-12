<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * This will simply redirect to the homepage
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return A new view holding the homepage
    */
    public function index() {
        return view('homepage');
    }

}
