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
        Schema::create('orden_produccion_detalles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orden_produccion_id')->constrained();
            $table->foreignId('materia_prima_id')->constrained();
            $table->integer('cantidad_utilizada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_produccion_detalles');
    }
};
