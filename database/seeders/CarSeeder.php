<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::insert([
            [
                'brand' => 'Toyota',
                'name' => 'Prius',
                'year' => '2010',
                'price' => 12000,
                'description' => 'Toyota Prius',
                'image_url' => '',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'brand' => 'Toyota',
                'name' => 'Prius',
                'year' => '2010',
                'price' => 12000,
                'description' => 'Toyota Prius',
                'image_url' => '',
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ]);
    }
}
