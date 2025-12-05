<?php

namespace App\Http\Controllers;

use App\Services\ProductoService;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    protected $productoService;

    public function __construct(ProductoService $productoService){

        $this->productoService = $productoService;
    }

    public function index()
    {
        // el controller solo interactua con el service
        $productos = $this->productoService->obtenerTodosLosProductos();

        return $productos;
    }

    public function create(array $data)
    {
        return $this->productoService->crearNuevoProducto($data);
    }


    public function show($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id , array $data)
    {
        return $this->productoService->updateProductos($id, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return $this->productoService->deleteProductos($id);
    }
}
