<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::controller(ProductoController::class)->group(function () {

    // mostrar todos los productos
    Route::get('/productos', 'index');

    Route::post('/crearProducto','create');
});