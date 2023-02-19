<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Ds\Vector;

/**
 * This will therefore handle the basket in terms of creating a new basket, destroying the basket when
 * required, and used when processing the customer's orders.
 * It will automatically empty the customer's products.
 * @author Ibrahim Ahmad <210029073@aston.ac.uk>
*/
class BasketController extends Controller
{
    private Vector $basket;

    public function __construct() {
        $this->basket = new Vector();
    }

    /**
    * This will simply initialise the basket and set it as a cookie.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @since 18-02-2023
     * @version 1.0
     */
    public function createBasket() {
        //dummy products
//        $product = new Product("550d", "BMW", "2015 BMW 5 Series 550d M Sport Diesel 5.0 litre engine",12565.34);
//        $product1 = new Product("320d", "BMW", "2012 BMW 3 Series 320d Normal Diesel 3.0 litre engine",12565.34);

//        $this->basket->push($product, $product1);

        //creates a new cookie that will expire in 30 days.
        setcookie("manualBasket", serialize($this->basket), time() + 2592000);
    }

    /**
     * This will simply add an item to basket, as well as remembering
     * the previous products.
     *
     * @since 19-02-2023
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @version 1.0
    */
    public function addProductToBasket() {



        //using eloquent ORM to retrieve an item
        //constructs product object
        //then pushes it to the basket
        //then creates a new cookies to hold the new data along
        //with the previous data
        $data = Products::where("productsId", 16)->get()[0];
        $product = new Product($data->model, $data->brand, $data->description,
        $data->price);

        $this->basket->push($product);

        $this->createBasket();

//        dd($this->basket->find($product));
    }

    /**
    * This will return the basket page, if a basket is empty a new basket will be created.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @since 18-02-2023
     * @version 1.0.1
     */
    public function viewBasket() {
        //cookie will expire within 30 days.
        if (!isset($_COOKIE['manualBasket'])) {
            $this->createBasket();
            return view('homepage');
        }

        $data = $_COOKIE['manualBasket'];
        $data = unserialize($data); //unserialising string from cookie to vector
        dd($data); //FOR DEBUGGING PURPOSES! DO NOT REMOVE!!
    }

    /**
     * This will simply destroy, hence the basket will be destroyed too.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @since 18-02-2023
     * @version 1.0
    */
    private function destroyCookie() {
        //destroys cookie such that it will point to the last 6 seconds.
        setcookie("manualBasket", "", time() - 6);
    }

//learn how to use cookies
    //created basket cookie do not remove! Ibrahim Ahmad
//        $basket = new Vector();
//        $product = new Product("550d", "BMW", "2015 BMW 5 Series 550d M Sport Diesel 5.0 litre engine",12565.34);
//        $product1 = new Product("320d", "BMW", "2012 BMW 3 Series 320d Normal Diesel 3.0 litre engine",12565.34);
//
//        $basket->push($product);
//        $basket->push($product1);

//        dd($basket);
//        $data = serialize($basket);
//        setcookie(name: "basket", value: $data, expires_or_options:  time() + 2592000);
//        $data1 = $_COOKIE['basket'];

//        $data1 = unserialize($data1);
//        dd($data1);

}
