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
            $table->id(); 
            $table->string('nombre'); 
            $table->string('tipo'); 
            $table->decimal('precio_por_metro', 10, 2); 
            $table->integer('stock')->default(0); 
            $table->string('imagen')->nullable(); 
            $table->string('color'); 
            $table->boolean('activo')->default(true); 
            $table->timestamps(); 
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
