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
        Schema::create('clientes', function (Blueprint $table) {
            $table->primary('id_cliente');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('domicilio');
            $table->string('localidad');
            $table->index('id_usuario');
            $table->bit('admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
