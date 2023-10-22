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
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')
                  ->references('id')
                  ->on('products')
                  ->onDelete("cascade")
                  ->onUpdate("cascade");
            $table->string('nombre');
            $table->double('precio');
            $table->integer('cantidad');
            $table->double('total');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')
                  ->references('id')
                  ->on('users')
                  ->onDelete("cascade")
                  ->onUpdate("cascade");
            $table->timestamp('fecha');

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
