<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run():
    void
    {
        $this->call([
            CategorySeeder::class,
            CitySeeder::class,
            Product::class,
        ]);


        Category::factory()
            ->count(5)
            ->has(Product::factory()->count(50))
            ->create();

        Product::factory()
            ->count(50)
            ->create();



        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com'
            ]);


        Reservation::factory()
            ->count(100)
            ->create();

    }
}
