<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;
class ProductFactory extends Factory
{
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();
        $product = Product::inRandomOrder()->first();

        return [
            'restaurant_id'=>Restaurant::factory(20),
            'category_id' =>$category->id,
            'name'=>fake()->word(),
            'description'=>fake()->sentence(),
            'price'=>fake()->randomFloat(2,5,100)
        ];
    }
}
