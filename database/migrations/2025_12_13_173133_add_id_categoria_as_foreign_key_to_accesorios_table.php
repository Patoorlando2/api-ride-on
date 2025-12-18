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
        Schema::table('accesorios', function (Blueprint $table) {
            // agregar la columna id_categoria
            $table->unsignedBigInteger('id_categoria');

            //clave foránea
            $table->foreign('id_categoria')
                ->references('id_categoria')
                ->on('categorias')
                ->onDelete('casacde');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accesorios', function (Blueprint $table) {
            //
        });
    }
};
