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
        Schema::create('productos', function (Blueprint $table) {
            $table->id("id_producto")->unique()->onDelete('cascade');

            $table->string("categoria")->onDelete('cascade');
            $table->decimal('precio', 10, 2)->onDelete('cascade')->notNull();

            $table->foreignId('id_vendedor')->constrained('vendedores')->onDelete('cascade');

            $table->morphs('caracteristicas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
