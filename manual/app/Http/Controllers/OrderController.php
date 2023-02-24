<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    public function proceedCheckout() {
        $basket = new BasketController();
        $basketCollection = $basket->basket();
        foreach ($basketCollection as $basket) {
            dd($basketCollection);
        }
        return "Order Checkout Route";
    }
}
