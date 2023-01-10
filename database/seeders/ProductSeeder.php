<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i <= 100; $i++) {
            DB::table('products')->insert([
                'product_name' => Str::random(15),
                'product_details' => Str::random(30),
                'product_price' => '200.00',
                'product_image' => 'assets/images/no_photo.jpg',
                'product_category' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]);
        }
    }
}
