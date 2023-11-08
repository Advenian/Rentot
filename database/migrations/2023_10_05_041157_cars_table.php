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
            $table->foreignId('renter_id')->nullable()->constrained('renters')->onDelete('cascade');

            $table->string('brand')->unique();
            $table->string('model');
            $table->enum('type', ['Sedan', 'SUV', 'Coupe', 'Convertible', 'Hatchback', 'Luxury', 'Electric', 'Sport']);
            $table->string('license_plate');
            $table->string('VIN');
            $table->string('manufacture_date');
            $table->string('color');
            $table->string('fuel_type');
            $table->string('fuel_capacity');
            $table->string('mileage');
            $table->string('daily_cost');
            $table->string('image_path');
            $table->enum('status', ['unavailable', 'available', 'in maintenance']);
            $table->timestamp('failed_at')->useCurrent();
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
