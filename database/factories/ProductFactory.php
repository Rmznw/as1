<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Resturant;
use Illuminate\Database\Eloquent\Factories\Factory;
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'restaurant_id'=>Resturant::factory(),
            'category_id'=>Category::factory(),
            'name'=>$this->faker->word(),
            'description'=>$this->faker->sentence(),
            'price'=>$this->faker->randomFloat(2,5,100)
        ];
    }
}
