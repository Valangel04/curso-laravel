<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta las migraciones para crear la tabla 'habitaciones'.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->decimal('precio', 8, 2);
            $table->string('tipo');
            $table->timestamps();
        });
    }

    /**
     * Revierte las migraciones para eliminar la tabla 'habitaciones'.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
