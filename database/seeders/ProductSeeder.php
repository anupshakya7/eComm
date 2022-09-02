<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name" => "Panasonic TV",
                "price" => "500",
                "description" => "A smart tv with much more features",
                "category" => "tv",
                "gallery" => "https://static-01.daraz.com.np/p/d8f9add8364a53aebb25de1304ea1a17.jpg",
            ],
            [
                "name" => "Sony TV",
                "price" => "700",
                "description" => "A tv with much more features",
                "category" => "tv",
                "gallery" => "https://www.tradeinn.com/f/13819/138192974/sony-kd43x81j-43-4k-led-tv.jpg",
            ],
            [
                "name" => "LG Fridge",
                "price" => "200",
                "description" => "A fridge with much more features",
                "category" => "fridge",
                "gallery" => "https://www.lg.com/np/images/plp-b2c/refrigerators/feature/M04_lk-refrigerators-herop-2-m.jpg",
            ],
        ]);
    }
}
