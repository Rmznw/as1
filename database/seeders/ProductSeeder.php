<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = ['Pastas', 'Sodas', 'Steaks', 'Burgers', 'Pizza'];
        foreach ($products as $product) {
            Product::create([
                'name' => $product,
            ]);
        }

    }
}
