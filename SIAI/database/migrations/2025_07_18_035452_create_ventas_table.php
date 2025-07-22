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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id("id_venta");

            $table->foreignId('numero_identificacion')->constrained('usuarios')->onDelete('cascade');
            $table->dateTime('fecha_venta');
            $table->decimal('valor_venta', 10, 2);
            $table->foreignId('metodo_pago_id')->constrained('metodo_pagos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
