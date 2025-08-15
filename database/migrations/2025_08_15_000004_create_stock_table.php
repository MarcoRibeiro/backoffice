<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->string('equipment', 30);
            $table->integer('cases');
            $table->integer('white_frames')->nullable();
            $table->integer('black_frames')->nullable();
            $table->integer('white_glasses')->nullable();
            $table->integer('black_glasses')->nullable();
            $table->integer('polarized_films')->nullable();
            $table->integer('tempered_films')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
