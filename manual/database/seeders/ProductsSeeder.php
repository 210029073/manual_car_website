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
        $product1->setImagePath("e93_manual_bmw_m3.jpg");

        $product2 = new Product(1, "Countach", "Lamborghini", "A vintage Lamborghini Countach built during the 1970s. A super car from the 1970s.", 500000, 3.9, "Manual", 2);
        $product2->setImagePath("lamborghini_countach.jpg");

        $product3 = new Product(2, "C3", "Citroen", "2014 Citroen C3 Cactus Petrol 2.0 Litre Engine, SUV", 12000, 2.0, "Automatic", 2000);
        $product3->setImagePath("c3_cactus_2014.jpg");

        $product4 = new Product(3, "535i", "BMW", "A luxury 2010 BMW 535i petrol car.", 9000, 3.5, "Manual", 12);
        $product4->setImagePath("2010_bmw_f10_535i.jpg");

        $product5 = new Product(4, "Phantom", "Rolls-Royce", "2019 Rolls Royce Phantom Eight Generation Luxury Car V12 Engine", 450000, 6.75, "Automatic", 20);
        $product5->setImagePath("2019_Rolls-Royce_Phantom_V12_Automatic_6.75.jpg");

        $product6 = new Product(5, "G-Wagon", "Mercedes", "2018 Mercedes G-Wagon G63 AMG", 140000.00, 3.00, "Automatic", 20);
        $product6->setImagePath("mercedes_g_wagon_g63_amg.jpg");

        $product7 = new Product(6, "C63", "Mercedes", "2020 Mercedes C63 AMG Black Automatic Car", 45000.00, 4.00, "Automatic", 20);
        $product7->setImagePath("mercedes_c63_amg_coupe.jpg");

        $product8 = new Product(7, "Golf-GTI-6-Speed-Manual", "Volkswagen", "2022 Volkswagen Golf GTI 2.0 Litre Engine Manual Transmission", 36800.00, 2.00, "Manual", 20);
        $product8->setImagePath("vw_golf_2022_gti.jpg");

        $product9 = new Product(8, "Golf-GTI-Auto", "Volkswagen", "2022 Volkswagen Golf GTI 2.0 Litre Engine Automatic Transmission", 36800.00, 2.00, "Automatic", 20);
        $product9->setImagePath("vw_golf_2022_gti_auto.jpg");

        $product10 = new Product(9, "");

        

        $carSeeds = array();
        array_push($carSeeds, $product1);
        array_push($carSeeds, $product2);
        array_push($carSeeds, $product3);
        array_push($carSeeds, $product4);
        array_push($carSeeds, $product5);
        array_push($carSeeds, $product6);
        array_push($carSeeds, $product7);
        array_push($carSeeds, $product8);
        array_push($carSeeds, $product9);

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
