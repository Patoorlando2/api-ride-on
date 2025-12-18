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
            $table->foreignId('id_imagen')
                  ->references('id_imagen')
                  ->on('imagenes')
                  ->onDelete('cascade');   
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
