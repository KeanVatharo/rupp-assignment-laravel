<?php

namespace Database\Seeders;

use App\Models\CarBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarBrand::insert([
            [
                'name' => 'BMW',
                'country' => 'Germany',
            ],
            [
                'name' => 'Bugatti',
                'country' => 'France',
            ],
            [
                'name' => 'Ferrari',
                'country' => 'Italy',
            ],
            [
                'name' => 'Nissan',
                'country' => 'Japan',
            ],
            [
                'name' => 'Lamborghini',
                'country' => 'Italy',
            ],
            [
                'name' => 'Rolls-Royce',
                'country' => 'England',
            ],
            [
                'name' => 'Porsche',
                'country' => 'Germany',
            ],
        ]);
    }
}
