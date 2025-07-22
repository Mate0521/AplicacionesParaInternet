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
        Schema::create('producto_sales', function (Blueprint $table) {
            $table->integer("id_venta")->constrained('ventas')->onDelete('cascade')->primary();
            $table->integer("id_producto")->unique()->onDelete('cascade')->primary();

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
        Schema::dropIfExists('producto_sales');
    }
};
