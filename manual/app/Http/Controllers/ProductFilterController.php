<?php

namespace App\Http\Controllers;

use App\Models\Products;

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
     * @version 1.0.1
     * @since 05-03-2023
    */
    public function filterProduct() {
        if(isset($_GET['filter_transmission'])) {
            return view('Products', ['products' => Products::where('transmission', $_GET['filter_transmission'])->get()]);
        }

        if(isset($_GET["cars"])) {
            if($_GET["cars"] == "All Cars") {
                return view('Products', ['products' => Products::all()]);
            }

            $result = Products::where('brand', $_GET["cars"])->get();

            if($result->isEmpty()) {
                return abort("404", "Could not find the item that you are searching for.");
            }
            return view("Products", ['products'=> $result]);
        }



        return view('Products', ['products' => Products::all()]);
    }
}
