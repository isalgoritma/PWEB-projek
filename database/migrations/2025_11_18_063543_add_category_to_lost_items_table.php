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
        // Dalam method 'up()'
        Schema::table('lost_items', function (Blueprint $table) {
            $table->string('category')->after('title')->nullable(); // Kolom 'category' ditambahkan di sini
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lost_items', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
};
