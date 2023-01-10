<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // Calling Factory
        Product::factory(100)->create();

        // Calling Seeder
        // $this->call([
        //     //ProductSeeder::class
        // ]);
    }
}
