<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function proceedCheckout() {
        $basket = new BasketController();
        $basketCollection = $basket->basket();
//        dd(Auth::id());
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
}
