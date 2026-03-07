<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            ['title' => 'PVC Systems', 'icon' => 'bi-layers', 'description' => 'Energy-efficient PVC solutions for modern residential and commercial projects.'],
            ['title' => 'Aluminum Systems', 'icon' => 'bi-grid-3x3-gap', 'description' => 'Durable, slim-profile aluminum structures for premium architecture.'],
            ['title' => 'Windows', 'icon' => 'bi-window', 'description' => 'Tailored window systems that maximize thermal comfort and natural light.'],
            ['title' => 'Doors', 'icon' => 'bi-door-open', 'description' => 'Secure and elegant door systems with long-lasting performance.'],
            ['title' => 'Facade Systems', 'icon' => 'bi-building', 'description' => 'Sophisticated facade glazing for business centers and industrial buildings.'],
            ['title' => 'Custom Glazing Solutions', 'icon' => 'bi-bezier2', 'description' => 'Project-specific engineering for bespoke glazing and structural concepts.'],
        ];

        foreach ($services as $index => $service) {
            Service::query()->create([...$service, 'sort_order' => $index + 1, 'is_active' => true]);
        }
    }
}
