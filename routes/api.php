<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;


Route::controller(ProductoController::class)->group(function () {

    // mostrar todos los productos
    Route::get('/productos', 'index');
    // Crear producto
    Route::post('/crearProducto','create');

    Route::get('/productos/{id}', 'show');

    Route::delete('/eliminar/{id}', 'destroy');
});