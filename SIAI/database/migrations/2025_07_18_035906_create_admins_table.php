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
        Schema::create('admins', function (Blueprint $table) {
             $table->bigInteger("numero_identificacion")->primary()->unique()->onDelete('cascade');
            $table->string("nombre")->onDelete('cascade');
            $table->string("apellidos")->onDelete('cascade');
            $table->string("email")->onDelete('cascade');
            $table->string("clave")->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
