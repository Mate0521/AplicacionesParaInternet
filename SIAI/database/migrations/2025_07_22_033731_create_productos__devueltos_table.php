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
        Schema::create('productos__devueltos', function (Blueprint $table) {
            $table->integer('id_producto');
            $table->integer("id_devolucion");

            $table->primary(['id_producto', 'id_devolucion']);

            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('id_devolucion')->references('id')->on('devoluciones')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos__devueltos');
    }
};
