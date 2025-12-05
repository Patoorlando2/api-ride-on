<?php 

namespace App\Services;

use App\Repositories\ProductoInterface;

class ProductoService
{
    protected $productoRepository;

    public function __construct(ProductoInterface $productoRepository){

        // Laravel inyectará automáticamente ProductoRepository (la implementación)
        $this->productoRepository = $productoRepository;
    }

    public function obtenerTodosLosProductos()
    {
        return $this->productoRepository->getAllProductos();
    }

    public function obtenerProductoPorId($id){

        return $this->productoRepository->getProductosById($id);
    }

    public function crearNuevoProducto(array $data)
    {
        return $this->productoRepository->createProductos($data);
    }

    public function updateProductos($id, array $data){
        $this->productoRepository->updateProductos($id, $data);
    }
    public function deleteProductos($id){
        return $this->productoRepository->deleteProductos($id);
    }
}


?>