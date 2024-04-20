<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Kean Vatharo',
            'email' => 'keanvatharo@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $this->call([
            CarBrandSeeder::class,
            CarSeeder::class,
            ServiceSeeder::class,
            FeedbackSeeder::class,
        ]);
    }
}
