<?php

namespace Database\Factories;

use App\Models\Resturant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id'=>User::factory(),
            'restaurant_id'=>Resturant::factory(),
            'date'=>$this->faker->date(),
            'time'=>$this->faker->time(),
            'guest_count'=>$this->faker->numberBetween(1,10)
        ];
    }
}
