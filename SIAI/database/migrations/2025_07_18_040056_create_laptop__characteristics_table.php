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
        Schema::create('laptop__characteristics', function (Blueprint $table) {
            $table->id();

            $table->string('processor')->onDelete('cascade');
            $table->string('ram')->onDelete('cascade');
            $table->string('storage')->onDelete('cascade');
            $table->string('graphics_card')->onDelete('cascade');
            $table->string('screen_size')->onDelete('cascade');
            $table->string('battery_life')->onDelete('cascade');
            $table->string('color')->onDelete('cascade');
            $table->string('operating_system')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptop__characteristics');
    }
};
