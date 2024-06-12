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
        Schema::create('customer_feedback', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('phone', 25)->nullable();
            $table->string('total_participant');
            $table->foreignUuid('tour_id')
                ->nullable()
                ->references('id')
                ->on('tours')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('departure_month');
            $table->text('message');
            $table->text('client_ip_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_feedback');
    }
};
