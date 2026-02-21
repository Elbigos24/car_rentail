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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->foreignId('brand_id')->references('id')->on('brands');
            $table->string('models');
            $table->integer('year');   
            $table->string('color');
            $table->string('licence_plate', 10)->unique();
            $table->integer('mileage');
            $table->integer('lat');
            $table->integer('lng');
            $table->integer('Is_premium');
            $table->integer('rental_count');
            $table->integer('daly_rate');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
