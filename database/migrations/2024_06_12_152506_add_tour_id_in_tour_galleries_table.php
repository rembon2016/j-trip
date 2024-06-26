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
        Schema::table('tour_galleries', function (Blueprint $table) {
            $table->foreignUuid('tour_id')
                ->after('image')
                ->references('id')
                ->on('tours')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tour_galleries', function (Blueprint $table) {
            //
        });
    }
};
