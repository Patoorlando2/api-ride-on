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
            $table->bigIncrements('id_producto');
            $table->string('nombre_producto');
            $table->text('descripcion');
            $table->decimal('precio', 10, 2);
            $table->integer('stock');
            $table->unsignedBigInteger('id_categoria');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('año');
            $table->boolean('destacados');
            $table->string('ficha_tecnica')->nullable();

            $table->foreign('id_categoria')
                ->references('id_categoria')
                ->on('categorias')
                ->onDelete('cascade');
                
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
