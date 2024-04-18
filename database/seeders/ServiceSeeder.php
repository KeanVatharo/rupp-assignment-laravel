<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'name' => 'General Repair & Maintenance',
                'description' => 'We offer comprehensive maintenance and repair services to keep your equipment running smoothly and efficiently.',
                'icon_name' => 'fas fa-wrench',
            ],
            [
                'name' => 'Diagnostics & Troubleshooting',
                'description' => "Our skilled technicians can diagnose and troubleshoot any issue you're facing to get you back on track quickly.",
                'icon_name' => 'fas fa-microscope',
            ],
            [
                'name' => 'Performance Optimization',
                'description' => "We can optimize your equipment's performance for improved efficiency, productivity, and cost savings.",
                'icon_name' => 'fas fa-rocket',
            ],
            [
                'name' => 'Collision Repair & Paintwork',
                'description' => "Get your car back to its pristine condition after an accident with our expert collision repair and high-quality paintwork services.",
                'icon_name' => 'fas fa-car-crash',
            ],
            [
                'name' => 'Wheel Alignment & Balancing',
                'description' => "Ensure optimal driving performance, safety, and tire longevity with our precise wheel alignment and balancing services.",
                'icon_name' => 'fas fa-balance-scale-left',
            ],
            [
                'name' => 'Interior & Exterior Detailing',
                'description' => "Restore your car's shine and enhance its value with our professional interior and exterior detailing services.",
                'icon_name' => 'fas fa-spa',
            ],
        ]);
    }
}
