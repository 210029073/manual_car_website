<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

/**
 * OrderController is responsible for managing orders, in terms of processing products in basket
 * to check out, as well as viewing past orders for corresponding customer.
 *
 * @author Ibrahim Ahmad <210029073@aston.ac.uk>
*/
class OrderController extends Controller
{
    /**
     * This will therefore proceed the orders into checkout.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
    */
    public function proceedCheckout() {
        if(Auth::check()) {
            $basket = new BasketController();
            $basketCollection = $basket->basket();
            foreach ($basketCollection as $basket) {
                $product = [
                    'userID' => Auth::id(),
                    'productsId' => $basket->getId(),
                    'price' => $basket->getPrice(),
                    'deliveryDate' => now(),
                    'orderDate' => now(),
                    'isProcessed' => false
                ];
                DB::update('UPDATE products SET stock = ? WHERE productsId = ?', [$basket->getQuantity(), $basket->getId()]);
                DB::table('orders')->insert($product);
            }
            //empty the basket!
            $cart = new BasketController();
            $cart->emptyBasket();

            return redirect()->intended("homepage")->with('successCheckout', "Successfully processed item in checkout");
        }
        return redirect()->to('login');
    }

    public function viewPastOrders() {
        if(Auth::check()) {
            $result = Order::where('userId', Auth::id())->get();
            $orderResult = array();
            for ($i = 0; $i < sizeof($result); $i++) {
                //parse isProcessed to boolean
                $isStatus = boolval($result[$i]->isProcessed);
                array_push($orderResult, new \App\Http\Controllers\Order(
                    $result[$i]->ordersId,
                    $result[$i]->userId,
                    $result[$i]->productsId,
                    $result[$i]->price,
                    $result[$i]->deliveryDate,
                    $result[$i]->orderDate,
                    $isStatus
                ));
//            array_push($orderResult, $order);
            }
            return view('past_orders', ['customerOrders' => $result]);
        }
        else {
            session_start();
            $_SESSION["manualPrevPage"] = url()->previous();
            return abort(401, "You are not logged.\nPlease login.", ["error"=>"unauthorised"]);
        }
    }
}
