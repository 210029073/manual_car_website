<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

/**
 * ProductFilterController is responsible for filtering through products via html
 * forms using HTTP requests for populating products according to the users
 * preference
 *
 * @author  Ibrahim Ahmad <210029073@aston.ac.uk>
 * @version 1.0
 * @since 05-03-2023
*/
class ProductFilterController
{
    /**
     * Responsible for populating the products webpage with the users preference
     * set for what products that they tend to browse, which will be populated
     * with the results based on their filter options.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @version 2.2
     * @since 05-03-2023
    */
    public function filterProduct(Request $request) {

        if($request->get('cars') != null) {
            if($request->get('cars') == "All Cars") {
                if($request->get('filter_transmission') != "Both") {
                    return view('Products', ['products' => Products
                            ::where('transmission', $request->get('filter_transmission'))
                            ->orwhere('price', '<=', intval($request->get('toNum')))
                            ->orwhere('price', '>=', intval($request->get('fromNum')))
                            ->get()]
                    );
                }
                if($request->get('filter_transmission') == "Both") {
                    return view('Products', ['products' => Products
                            ::where('price', '<=', intval($request->get('toNum')))
                            ->where('price', '>=', intval($request->get('fromNum')))
                            ->get()]
                    );
                }

                return view('Products', ['products' => Products::all()]);

            }
        }
//
        if($request->get('filter_transmission') == "Both") {
            return view('Products', ['products' => Products
                    ::where('brand', $request->get('cars'))
                    ->where('likes', ">=", intval($request->get('popularity')))
                    ->where('price', '<=', intval($request->get('toNum')))
                    ->where('price', '>=', intval($request->get('fromNum')))
                    ->get()]
            );
        }

        if($request->get('filter_transmission') == "Manual" || $request->get('filter_transmission') == "Automatic") {
            return view('Products', ['products' => Products
                    ::where('brand', $request->get('cars'))
                    ->where('transmission', $request->get('filter_transmission'))
                    ->where('price', '<=', intval($request->get('toNum')))
                    ->where('price', '>=', intval($request->get('fromNum')))
                    ->get()]
            );
        }


        else{
            return abort("404", "Could not find the item that you are searching for.");
        }
    }
}
