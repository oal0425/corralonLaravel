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

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('marca');
            $table->timestamp('fecha_vencimiento')->useCurrent();
            $table->timestamp('fecha_elaboracion')->useCurrent();
            $table->float('precio');
            $table->integer('stock_actual');
            $table->integer('stock_minimo');
            $table->integer('stock_repo');

            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')
                  ->references('id')
                  ->on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
