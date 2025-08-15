<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('faults', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id')->constrained('equipment');
            $table->foreignId('status_id')->constrained('statuses');
            $table->foreignId('user_id')->constrained('users');
            $table->date('entry_date');
            $table->date('delivery_date');
            $table->double('budget')->nullable();
            $table->foreignId('client_id')->nullable()->constrained('clients');
            $table->string('observations', 2048);
            $table->date('expected_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('faults');
    }
};
