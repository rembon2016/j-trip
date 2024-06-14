<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('text_top_banner')->nullable();
            $table->string('title_banner')->nullable();
            $table->string('slider_banner')->nullable();
            $table->string('title_section_one')->nullable();
            $table->string('desc_section_one')->nullable();
            $table->string('image_section_one')->nullable();
            $table->string('icon_one')->nullable();
            $table->string('title_one')->nullable();
            $table->string('desc_one')->nullable();
            $table->string('icon_two')->nullable();
            $table->string('title_two')->nullable();
            $table->string('desc_two')->nullable();
            $table->string('icon_three')->nullable();
            $table->string('title_three')->nullable();
            $table->string('desc_three')->nullable();
            $table->string('image_section_three')->nullable();
            $table->string('title_section_three')->nullable();
            $table->string('desc_section_three')->nullable();
            $table->string('title_step_one')->nullable();
            $table->string('desc_step_one')->nullable();
            $table->string('title_step_two')->nullable();
            $table->string('desc_step_two')->nullable();
            $table->string('title_step_three')->nullable();
            $table->string('desc_step_three')->nullable();
            $table->string('title_step_four')->nullable();
            $table->string('desc_step_four')->nullable();
            $table->string('promise')->nullable();
            $table->string('promise_banner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home');
    }
};
