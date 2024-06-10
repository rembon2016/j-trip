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
        Schema::create('settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('address')->nullable();
            $table->string('whatsapp_number', 25)->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('email')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('tiktok_url')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->foreignUuid('updated_by')
                ->nullable()
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
