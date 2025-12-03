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
        Schema::table('productos', function (Blueprint $table) {
            
            $table->unsignedBigInteger('id_imagen')->nullable()->after('id_categoria');

            // clave foránea
            $table->foreign('id_imagen')
              ->references('id_imagen')
              ->on('imagens')
              ->onDelete('set null'); // si se borra la imagen, queda null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            //
        });
    }
};
