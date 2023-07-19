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
            $table->primary('id_producto');
            $table->string('nombre');
            $table->string('marca');
            $table->timestamp('fecha_vencimiento');
            $table->timestamp('fecha_elaboracion');
            $table->float('precio');
            $table->integer('stock_actual');
            $table->integer('stock_minimo');
            $table->integer('stock_repo');
            $table->index('id_proveedor');
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
