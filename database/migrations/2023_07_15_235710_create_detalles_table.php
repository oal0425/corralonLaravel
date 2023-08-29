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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_comprobante');
            $table->foreign('id_comprobante')
                  ->references('id')
                  ->on('comprobantes')
                  ->onDelete("cascade")
                  ->onUpdate("cascade");
            /*
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')
                  ->references('id')
                  ->on('products')
                  ->onDelete("cascade")
                  ->onUpdate("cascade");
            */
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles');
    }
};
