<?php

namespace App\Http\Controllers;

use App\Models\ContactDetail;
use App\Models\HomepageSetting;
use App\Models\Service;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('home', [
            'settings' => HomepageSetting::query()->firstOrFail(),
            'services' => Service::query()->where('is_active', true)->orderBy('sort_order')->get(),
            'contact' => ContactDetail::query()->firstOrFail(),
            'benefits' => [
                ['icon' => 'bi-clock-history', 'title' => 'Since 2006', 'text' => 'Nearly two decades of proven manufacturing expertise.'],
                ['icon' => 'bi-building-gear', 'title' => 'In-house production', 'text' => 'Total control from concept to final assembly.'],
                ['icon' => 'bi-patch-check', 'title' => 'European standards', 'text' => 'Reliable quality with strict compliance at every stage.'],
                ['icon' => 'bi-cpu', 'title' => 'Modern technologies', 'text' => 'Advanced equipment for precision and durability.'],
                ['icon' => 'bi-arrows-fullscreen', 'title' => 'Any project scale', 'text' => 'Flexible solutions for private and commercial spaces.'],
                ['icon' => 'bi-people', 'title' => 'Trusted partner', 'text' => 'Preferred by homeowners and construction professionals.'],
            ],
            'processSteps' => [
                'Consultation',
                'Design & Engineering',
                'Manufacturing',
                'Assembly',
                'Delivery / Project Completion',
            ],
        ]);
    }
}
