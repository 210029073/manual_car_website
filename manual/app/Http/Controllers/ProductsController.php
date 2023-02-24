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
        return view('Products', ['products'=>Products::all()]);
    }

    public function store(Request $request){
        $model = $request->input('model');
        $descrip = $request->input('description');
        $transmission = $request->input('transmission');
        $brand = $request->input('brand');
        $price = $request->input('price');
        $img = $request->input('img');
        $stock = 0;
        $likes = 0;
        $data=array(
            'model'=>$model,
            'description'=>$descrip,
            'brand'=>$brand,
            'price'=>$price,
            'stock'=>$stock,
            'image'=>$img,
            'likes'=>$likes);
        // $DB = new
        Products::insert($data);
        return view('Home');
    }
}
