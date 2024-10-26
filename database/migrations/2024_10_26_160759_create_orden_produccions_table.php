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
        Schema::create('orden_produccions', function (Blueprint $table) {
            $table->id();   
            $table->foreignId('producto_id')->constrained();   
            $table->integer('cantidad_produccion')->nullable();   
            $table->integer('cantidad_producido')->nullable();   
            $table->datetime('fecha_inicio')->nullable();   
            $table->datetime('fecha_final')->nullable();   
            $table->datetime('fecha_ejecucion');   
            $table->foreignId('estado_id')->constrained();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_produccions');
    }
};
