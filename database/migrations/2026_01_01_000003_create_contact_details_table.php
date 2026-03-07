<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_details', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('aluminum_phone');
            $table->string('aluminum_email');
            $table->string('pvc_phone');
            $table->string('pvc_email');
            $table->string('sales_phone');
            $table->string('sales_email');
            $table->string('working_hours_weekdays');
            $table->string('working_hours_weekend');
            $table->string('map_embed_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_details');
    }
};
