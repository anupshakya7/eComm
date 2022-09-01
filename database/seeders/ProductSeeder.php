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
                "name" => "Samsung mobile",
                "price" => "300",
                "description" => "A smartphone with 8gb ram and much more features",
                "category" => "mobile",
                "gallery" => "https://636571.smushcdn.com/2636162/wp-content/uploads/2022/01/samsung-galaxy-m02s-price-in-nepal-6546546540001-770x578.jpg?lossy=1&strip=1&webp=1",
            ],
            [
                "name" => "Nokia mobile",
                "price" => "400",
                "description" => "A smartphone with 6gb ram and much more features",
                "category" => "mobile",
                "gallery" => "https://www.androidauthority.com/wp-content/uploads/2020/09/nokia-8.3-3.4-2.4-together-backsides-2-840x472.jpg.webp",
            ],
        ]);
    }
}
