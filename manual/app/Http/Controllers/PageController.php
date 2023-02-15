<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
/**
 * Controller responsible for Page directions.
 * @author @Victorymp <200174572@aston.ac.uk> 
 * @since 06/02/2023
 * @version 1.0
*/
class PageController extends Controller
{

    public function Home(){
        return view('Home', ['products'=>Products::all()]);
    }

    public function Layouts(){
        return view('layouts', ['products'=>Products::all()]);
    }
}
