<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = ['Ashgabat','Lebap','Dashoguz','Mary','Ahal'];
        foreach ($cities as $city){
            City::create([
                'name' => $city,
            ]);

        };
    }
}
