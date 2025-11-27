<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('barang_ditemukan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // penemu barang
            $table->string('nama_barang');
            $table->text('deskripsi')->nullable();
            $table->string('lokasi_ditemukan');
            $table->date('tanggal_ditemukan');
            $table->string('foto')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barang_ditemukan');
    }
};
