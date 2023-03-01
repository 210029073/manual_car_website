<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
/**
 * Controller responsible for Products page.
 * @author @Victorymp <200174572@aston.ac.uk>
 * @author  Ibrahim Ahmad <210029073@aston.ac.uk>
 * @since 06/02/2023
 * @version 1.0.1
*/
    public function products(){
        return view('Products', ['products'=>Products::all()]);
    }

    /**
     * This is responsible for viewing a single product according to the id.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @since  01/03/2023
    */
    public function singleProduct(int $id) {
        session_start();
        $_SESSION['prevLinkProductPage'] = url()->previous();
        $product = Products::where('productsId', $id)->get();
        return view('singleProduct', ['products' => $product]);
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
