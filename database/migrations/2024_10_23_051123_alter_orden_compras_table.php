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
        Schema::table('orden_compras', function (Blueprint $table) {
            $table->dropForeign('orden_compras_producto_id_foreign');
            $table->dropColumn('producto_id');
            $table->foreignId('mp_id')->nullable()->references('id')->on('materia_primas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orden_compras', function (Blueprint $table) {
            $table->dropForeign('orden_compras_mp_id_foreign');
            $table->dropColumn('mp_id');
            $table->foreignId('producto_id')->constrained();
        });
    }
};
