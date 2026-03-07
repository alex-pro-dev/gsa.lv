<?php

namespace Database\Seeders;

use App\Models\ContactDetail;
use Illuminate\Database\Seeder;

class ContactDetailSeeder extends Seeder
{
    public function run(): void
    {
        ContactDetail::query()->create([
            'address' => 'Skandu iela 10, Riga, LV-1067, Latvia',
            'aluminum_phone' => '+371 27700530',
            'aluminum_email' => 'alu@gsa.lv',
            'pvc_phone' => '+371 27719316',
            'pvc_email' => 'pvc@gsa.lv',
            'sales_phone' => '+371 26119559',
            'sales_email' => 'sales@gsa.lv',
            'working_hours_weekdays' => 'Monday–Friday: 8:00 AM – 5:00 PM',
            'working_hours_weekend' => 'Saturday, Sunday: Closed',
            'map_embed_url' => 'https://www.google.com/maps?q=Skandu%20iela%2010%20Riga&output=embed',
        ]);
    }
}
