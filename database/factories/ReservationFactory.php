<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id'=>User::factory(),
            'restaurant_id'=>Restaurant::factory(),
            'date'=>fake()->date(),
            'time'=>fake()->time(),
            'guest_count'=>fake()->numberBetween(1,10)
        ];
    }
}
