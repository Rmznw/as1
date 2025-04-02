<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{

    public function definition(): array
    {
        $city = City::inRandomOrder()->first();
        return [
            'city_id'=>$city->id,
            'name'=>fake()->company(),
            'address'=>fake()->address(),
            'description'=>fake()->paragraph(),
        ];
    }
}

