<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageSetting extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_primary_cta',
        'hero_secondary_cta',
        'about_content',
        'show_about',
        'show_services',
        'show_why_choose',
        'show_process',
        'show_contact',
    ];

    protected function casts(): array
    {
        return [
            'show_about' => 'boolean',
            'show_services' => 'boolean',
            'show_why_choose' => 'boolean',
            'show_process' => 'boolean',
            'show_contact' => 'boolean',
        ];
    }
}
