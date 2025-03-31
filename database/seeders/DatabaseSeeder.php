<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Resturant;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run():
    void
    {
        City::factory(5)->create();
        Resturant::factory(20)->create();
        Category::factory(5)->create();
        Product::factory(50)->create();
        Reservation::factory(100)->create();
        User::factory(10)->create();



        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
