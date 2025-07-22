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
        Schema::create('car__characteristics', function (Blueprint $table) {
            $table->id("placa_vehicular");


            $table->string('engine_type')->onDelete('cascade');
            $table->string('fuel_type')->onDelete('cascade');
            $table->string('transmission')->onDelete('cascade');
            $table->string('color')->onDelete('cascade');
            $table->string('mileage')->onDelete('cascade');
            $table->string('year')->onDelete('cascade');
            $table->string('body_type')->onDelete('cascade');
            $table->string('seating_capacity')->onDelete('cascade');
            $table->string('safety_features')->onDelete('cascade');
            $table->string('infotainment_system')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car__characteristics');
    }
};
