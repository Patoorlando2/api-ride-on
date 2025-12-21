<?php

use App\Http\Controllers\AccesorioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\NewsletterController;
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

Route::controller(NewsletterController::class)->group(function () {

    Route::post('/insertarNewsletter', 'create');

});

Route::controller(AccesorioController::class)->group(function () {

    Route::get('/accesorios', 'index');

});

Route::controller(CategoriaController::class)->group(function() {

    Route::get('/categorias/tipo/{tipo}', 'obtenerCategoriasPorTipo');
    Route::get('/categorias', 'obtenerCategorias');
});

