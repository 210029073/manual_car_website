<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Ds\Set;
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
     * @version 2.2.3
     * @since 05-03-2023
    */

    private Set $carBrand;

    public function __construct() {
        $this->carBrand = new Set();
        $this->populateSetOfCarBrands();
    }

    /**
     * This will populate the car brands in a set of strings
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
    */
    private function populateSetOfCarBrands(): void
    {
        foreach(Products::all() as $product) {
            if(!$this->carBrand->contains($product->brand)) {
                $this->carBrand->add($product->brand);
            }
        }
    }

    /**
     * This should return a set of unique car brands
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return Set
     */
    public function getCarBrand(): Set
    {
        return $this->carBrand;
    }

    public function filterProduct(Request $request) {

        if($request->get('cars') != null) {
            if($request->get('cars') == "All Cars") {
                if($request->get('filter_transmission') != "Both") {
                    if(intval($request->get('fromNum')) >= 0 && intval($request->get('toNum')) != 0) {
                        return view('Products', ['products' => Products
                            ::where('transmission', $request->get('filter_transmission'))
                            ->where('price', '<=', intval($request->get('toNum')))
                            ->where('price', '>=', intval($request->get('fromNum')))
                            ->get()]
                        );
                    }
                    return view('Products', ['products' => Products
                            ::where('transmission', $request->get('filter_transmission'))
                            ->get()]
                    );
                }
                else {
                    if(intval($request->get('fromNum')) >= 0 && intval($request->get('toNum')) != 0) {
                        return view('Products', ['products' => Products
                                ::where('transmission', $request->get('filter_transmission'))
                                ->where('price', '<=', intval($request->get('toNum')))
                                ->where('price', '>=', intval($request->get('fromNum')))
                                ->get()]
                        );
                    }
                    return view('Products', ['products' => Products::all()]);
                }
            }
        }
//
        if($request->get('filter_transmission') == "Both") {
            if(intval($request->get('fromNum')) >= 0 && intval($request->get('toNum')) != 0) {
                return view('Products', ['products' => Products
                        ::where('price', '<=', intval($request->get('toNum')))
                        ->where('price', '>=', intval($request->get('fromNum')))
                        ->get()]
                );
            }
            return view('Products', ['products' => Products
                    ::where('brand', $request->get('cars'))
                    ->where('likes', ">=", intval($request->get('popularity')))
                    ->get()]
            );
        }

        if($request->get('filter_transmission') != "Both") {
            if(intval($request->get('fromNum')) >= 0 && intval($request->get('toNum')) != 0) {
                return view('Products', ['products' => Products
                        ::where('transmission', $request->get('filter_transmission'))
                        ->where('price', '<=', intval($request->get('toNum')))
                        ->where('price', '>=', intval($request->get('fromNum')))
                        ->get()]
                );
            }
            return view('Products', ['products' => Products
                    ::where('brand', $request->get('cars'))
                    ->where('transmission', $request->get('filter_transmission'))
                    ->get()]
            );
        }
    }
}
