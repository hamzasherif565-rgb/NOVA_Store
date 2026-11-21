<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "category_id"=>Category::inRandomOrder()->value('id'),
            'name' => fake()->name(),
            "description"=> fake()->sentence(),
            "price"=> fake()->numberBetween(100,9650),
            'quantity'=> fake()->numberBetween(0,1000),
        ];
    }
}
