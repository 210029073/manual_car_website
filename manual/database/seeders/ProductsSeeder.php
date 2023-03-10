<?php

namespace Database\Seeders;

use App\Http\Controllers\Product;
use App\Models\Products;
use Cassandra\Float_;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Floats;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product1 = new Product(0, "M3", "BMW", "2011 BMW E93 M3", 2500, 4.0, "Manual", 36);
        $product1->setImagePath("e93_manual_bmw.jpg");

        $product2 = new Product(1, "Countach", "Lamborghini", "A vintage Lamborghini Countach built during the 1970s. A super car from the 1970s.", 500000, 3.9, "Manual", 2);
        $product2->setImagePath("lamborghini_countach.jpg");

        $carSeeds = array($product1, $product2);

        foreach ($carSeeds as $carSeed) {
            DB::table('products')->insert([
                'model' => $carSeed->getModel(),
                'description' => $carSeed->getDescription(),
                'brand' => $carSeed->getBrand(),
                'price' => $carSeed->getPrice(),
                'engine_capacity' => $carSeed->getEngineCapacity(),
                'stock' => $carSeed->getQuantity(),
                'transmission' => $carSeed->getTransmission(),
                'image' => $carSeed->getImagePath(),
                'likes' => 100000
            ]);
        }
    }
}
