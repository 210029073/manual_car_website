<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class PageController extends Controller
{
    //
    public function Home(){
        return view('Home', ['products'=>Products::all()]);
    }

    public function Layouts(){
        return view('layouts', ['products'=>Products::all()]);
    }
}
