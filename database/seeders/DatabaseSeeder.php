<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
{       User::factory(30)->create();
        $this->call([
            CategorySeeder::class,
            CitySeeder::class,
        ]);

        Restaurant::factory(20)->create();





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
