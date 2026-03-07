<?php

namespace Database\Seeders;

use App\Models\HomepageSetting;
use Illuminate\Database\Seeder;

class HomepageSettingSeeder extends Seeder
{
    public function run(): void
    {
        HomepageSetting::query()->create([
            'hero_title' => 'Precision PVC & Aluminum Structures for Modern Projects',
            'hero_subtitle' => 'GSA Production delivers premium window, door, and facade systems that combine engineering precision, elegant design, and long-term durability.',
            'hero_primary_cta' => 'Request Consultation',
            'hero_secondary_cta' => 'Our Products',
            'about_content' => 'Since 2006, G.S.A. Production SIA has evolved from a compact production team into a trusted manufacturing partner for private customers and construction companies. We specialize in PVC and aluminum window, door, and facade systems, combining advanced technology, high-grade materials, and full alignment with European standards. Our in-house production facility gives us complete control over every stage, from design and engineering to assembly and final output. With years of practical experience, we deliver optimal glazing and enclosure solutions for residential, office, retail, and high-demand architectural projects of any scale.',
            'show_about' => true,
            'show_services' => true,
            'show_why_choose' => true,
            'show_process' => true,
            'show_contact' => true,
        ]);
    }
}
