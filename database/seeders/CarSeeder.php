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
                'name' => 'M5 CS',
                'car_brand_id' => 1,
                'year' => rand(2022, 2024),
                'price' => 142995,
                'description' => 'The BMW M5 CS is an exceptional high-performance model with a unique combination of power, driving dynamics, exclusivity and emotional design. As a four-door sedan, it can be used in all situations and is at the same time predestined for fast laps on racetracks like the Nürburgring Nordschleife, on which the BMW M engineers did the fine tuning for their suspension set-up. Maximum grip is provided by the standard, high-performance Pirelli P Zero Corsa tyres, 275/35 at the front and 285/35 at the rear, which have been specially matched to the BMW M5 CS.',
                'image_url' => './cars/BMW_M5_CS_2022.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'Chiron Super Sport',
                'car_brand_id' => 2,
                'year' => rand(2022, 2024),
                'price' => 192985,
                'description' => 'A hypercar known for its extreme speed and luxurious interior. It is the successor to the Bugatti Chiron, and it is powered by a 1600-horsepower quad-turbocharged W16 engine. The Chiron Super Sport has a top speed of over 300 mph (483 km/h), making it one of the fastest cars in the world.',
                'image_url' => './cars/Bugatti_Chiron_Super_Sport.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'Enzo',
                'car_brand_id' => 3,
                'year' => rand(2022, 2024),
                'price' => 272995,
                'description' => 'A limited-production high-performance sports car known for its racing heritage. It was named after Enzo Ferrari, the founder of Ferrari, and it was only produced from 2002 to 2005. The Enzo has a 660-horsepower V12 engine and a top speed of 217 mph (350 km/h).',
                'image_url' => './cars/Ferrari_Enzo.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'GT-R(R35)',
                'car_brand_id' => 4,
                'year' => rand(2022, 2024),
                'price' => 162995,
                'description' => 'A high-performance sports car known for its all-wheel drive and tunable performance. It has been in production since 2007 and is one of the most popular sports cars in the world. The GT-R(R35) has a 565-horsepower twin-turbocharged V6 engine and a top speed of 205 mph (332 km/h).',
                'image_url' => './cars/The_Nissan_GT-R_R35.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'Huracan STO',
                'car_brand_id' => 5,
                'year' => rand(2022, 2024),
                'price' => 334695,
                'description' => 'A high-performance sports car known for its aggressive styling and track-focused capabilities. It is a variant of the Lamborghini Huracan, and it is designed for track driving. The Huracan STO has a 640-horsepower V10 engine and a top speed of 205 mph (332 km/h).',
                'image_url' => './cars/Lamborghini_Huracan.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'Ghost',
                'car_brand_id' => 6,
                'year' => rand(2022, 2024),
                'price' => 393500,
                'description' => 'A luxury sedan known for its refined driving experience and opulent interior. It is one of the most luxurious cars in the world, and it is often used by celebrities and royalty. The Ghost has a 563-horsepower twin-turbocharged V12 engine and a top speed of 155 mph (250 km/h).',
                'image_url' => './cars/Rolls_Royce_Ghost.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'Spyder',
                'car_brand_id' => 7,
                'year' => rand(2022, 2024),
                'price' => 845000,
                'description' => 'A two-seater convertible sports car known for its handling and open-air driving experience. It is a variant of the Porsche Boxster, and it is designed for a more engaging driving experience. The Spyder has a 420-horsepower flat-six engine and a top speed of 180 mph (290 km/h).',
                'image_url' => './cars/Porsche_918_Spyder.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'LaFerrari',
                'car_brand_id' => 3,
                'year' => rand(2022, 2024),
                'price' => 115435,
                'description' => 'It appears that \'Ferrari LaFerrari GT-R(R35)\' is not an actual car model. There is a Ferrari LaFerrari, which is a limited-production hybrid hypercar, and there is a Nissan GT-R(R35), which is a high-performance sports car. However, there is no model that combines the two names.',
                'image_url' => './cars/Ferrari_LaFerrari.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ]);
    }
}
