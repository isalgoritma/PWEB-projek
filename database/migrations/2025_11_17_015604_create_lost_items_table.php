<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('lost_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['lost','found'])->default('lost');
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->date('date_lost')->nullable();
            $table->enum('status', ['open','matched','closed'])->default('open');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('lost_items');
    }
};
