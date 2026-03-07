<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('homepage_settings', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
            $table->text('hero_subtitle');
            $table->string('hero_primary_cta')->default('Request Consultation');
            $table->string('hero_secondary_cta')->default('Our Products');
            $table->text('about_content');
            $table->boolean('show_about')->default(true);
            $table->boolean('show_services')->default(true);
            $table->boolean('show_why_choose')->default(true);
            $table->boolean('show_process')->default(true);
            $table->boolean('show_contact')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('homepage_settings');
    }
};
