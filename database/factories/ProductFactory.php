<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->name(),
            'product_details' => $this->faker->paragraph(),
            'product_price' => $this->faker->numerify(),
            'product_image' => $this->faker->imageUrl(640, 480),
            'product_category' => $this->faker->randomDigit()

        ];
    }
}
