<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Ds\Map;

/**
 * This will therefore handle the basket in terms of creating a new basket, destroying the basket when
 * required, and used when processing the customer's orders.
 * It will automatically empty the customer's products.
 * @author Ibrahim Ahmad <210029073@aston.ac.uk>
 * @version 1.2.2
*/
class BasketController extends Controller
{
    private Map $basket;
    private $json;

    private $size;
    public function __construct() {
        $this->basket = new Map();
        if(isset($_COOKIE['manualBasket'])) {
            $previousData = $_COOKIE['manualBasket'];
            $previousData = unserialize($previousData);
            foreach ($previousData as $item) {
                $this->basket->put($item->getModel(),$item);
            }
        }
        $size = 0;
    }

    /**
    * This will simply initialise the basket and set it as a cookie.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @since 18-02-2023
     * @version 1.0
     */

    /**
     * This will simply add an item to basket, as well as remembering
     * the previous products.
     *
     * @since 19-02-2023
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @version 1.2
    */
    public function addProductToBasket(Product $product) {
        $this->basket->put($product->getModel(), $product);
    }

    /**
     * This is responsible for adding items to basket, which should provide a success popup,
     * if an item exists it should show a popup stating that the item already exists.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @version 3.0
    */
    public function addProductsToBasket()
    {
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $description = $_POST['description'];
        $price = floatval($_POST['price']);
        $stock = intval($_POST['stock']);
        $likes = intval($_POST['likes']);
        $engine_capacity = floatval($_POST['engineCapacity']);
        $transmission = $_POST['transmission'];
        $product = Products::where('model', $model)->where('brand', $brand)->get();
        $id = $product[0]->productsId;

        //construct product object
        $createdProduct = new Product($id, $model, $brand, $description, $price, $engine_capacity, $transmission, $stock);
        $createdProduct->setImagePath($_POST['image']);
        if ($this->basket->hasKey($createdProduct->getModel())) {
            return redirect()->intended('/products')->with('itemAlreadyExists', "Item is already added to basket.");
        } else {
            //add to basket
            $this->addProductToBasket($createdProduct);
            setcookie("manualBasket", serialize($this->basket), time() + 2592000, "/");
            return redirect()->intended('/products')->with('successAddProduct', "Successfully added product to basket!");
        }
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
            setcookie("manualBasket", serialize($this->basket), time() + 2592000, "/");
            return view('homepage');
        }
        $data = $_COOKIE['manualBasket'];

        $data = unserialize($data); //unserialising string from cookie to vector
//        dd($data); //FOR DEBUGGING PURPOSES! DO NOT REMOVE!!
        return view("Basket");
    }

    /**
     * This will simply destroy, hence the basket will be destroyed too.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @since 18-02-2023
     * @version 1.0
    */
    public function destroyCookie() {
        //destroys cookie such that it will point to the last 6 seconds.
        unset($_COOKIE['manualBasket']);
    }

    /**
     * This will provide the mechanism for emptying items in basket.
     * It will also provide a success message that all items have been successfully removed
     * once orders has been checked out.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @since 05-03-2023
     * @version 1.0
    */
    public function emptyBasket() {
        if(isset($_COOKIE['manualBasket'])) {
            //clear all items in basket
            $this->basket->clear();
            setcookie("manualBasket", serialize($this->basket), time() + 2592000, "/");
            return redirect()->intended('/basket')->with('successRemoveAllItemsInBasket', "Successfully added product to basket!");
        }

        return redirect()->back();
    }

    public function basket() {
        return $this->basket;
    }

    /**
     * This will simply delete an item from basket, should a success message that a specific
     * item has been removed from basket.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @since 05-03-2023
    */
    public function deleteItemFromBasket() {
        $id = intval($_GET['id']);
        $brand = $_GET['brand'];
        $model = $_GET['model'];
        $description = $_GET['description'];
        $price = floatval($_GET['price']);
        $targetIndex = 0;

        $this->basket->remove($model);
        setcookie("manualBasket", serialize($this->basket), time() + 2592000, "/");
        $msg = "Successfully removed " . $brand . " " . $model . " from basket";
        return redirect()->back()->with('deleteItemFromBasket', $msg);
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
