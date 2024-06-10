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
        Schema::create('tours', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->text('slug');
            $table->text('description');
            $table->text('thumbnail');
            $table->string('room_type')->nullable();
            $table->integer('total_destination')->default(0);
            $table->string('transportation')->nullable();
            $table->string('tour_guide')->nullable();
            $table->bigInteger('price')->default(0);
            $table->bigInteger('total_visitor')->default(0);
            $table->foreignUuid('destination_id')
                ->references('id')
                ->on('destinations')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignUuid('created_by')
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
        Schema::dropIfExists('tours');
    }
};
