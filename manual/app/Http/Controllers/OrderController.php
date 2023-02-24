<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * This will therefore proceed the orders into checkout.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
    */
    public function proceedCheckout() {
        $basket = new BasketController();
        $basketCollection = $basket->basket();
        foreach ($basketCollection as $basket) {
            $product = [
                'userID' => Auth::id(),
                'productsId' => $basket->getId(),
                'price' => $basket->getPrice(),
                'deliveryDate' => date("d/m/y H:i:s"),
                'orderDate' => date("d/m/y H:i:s")
            ];
            DB::table('orders')->insert($product);
        }
        return redirect()->intended("homepage")->with('successCheckout', "Successfully processed item in checkout");
    }

    public function viewPastOrders() {
        $result = Order::where('userId', Auth::id())->get();
        $orderResult = array();
        for ($i = 0; $i < sizeof($result); $i++) {
            array_push($orderResult, new \App\Http\Controllers\Order(
                $result[$i]->ordersId,
                $result[$i]->userId,
                $result[$i]->productsId,
                $result[$i]->price,
                $result[$i]->deliveryDate,
                $result[$i]->orderDate
            ));
//            array_push($orderResult, $order);
//            dd($order);
        }
        dd($orderResult);
        return view('past_orders', ['customerOrders' => $result]);
    }
}
