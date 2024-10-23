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
        Schema::table('materia_primas', function (Blueprint $table) {
            $table->integer('punto_reorden')->default(20);
            $table->integer('cantidad_reabastecer')->default(200);            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materia_primas', function (Blueprint $table) {
            $table->dropColumn('punto_reorden');
            $table->dropColumn('cantidad_reabastecer');
        });
    }
};
