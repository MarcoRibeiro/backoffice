<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('description', 512);
            $table->string('css_class', 24);
            $table->timestamps();
        });

        DB::table('statuses')->insert([
            ['id' => 1, 'description' => 'Under Analysis', 'css_class' => 'alert-info'],
            ['id' => 2, 'description' => 'Under Repair', 'css_class' => 'alert-warning'],
            ['id' => 3, 'description' => 'Not Repairable', 'css_class' => 'alert-danger'],
            ['id' => 4, 'description' => 'Repaired', 'css_class' => 'alert-success'],
            ['id' => 5, 'description' => 'Delivered', 'css_class' => 'alert-success'],
            ['id' => 6, 'description' => 'Delivered without Repair', 'css_class' => 'alert-danger'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
