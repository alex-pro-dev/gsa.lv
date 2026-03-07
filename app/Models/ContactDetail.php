<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    protected $fillable = [
        'address',
        'aluminum_phone',
        'aluminum_email',
        'pvc_phone',
        'pvc_email',
        'sales_phone',
        'sales_email',
        'working_hours_weekdays',
        'working_hours_weekend',
        'map_embed_url',
    ];
}
