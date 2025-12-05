<?php 

namespace App\Repositories;

interface ProductoInterface
{

    public function getAllProductos();
    public function getProductosById($id);
    public function createProductos(array $data);
    public function updateProductos($id, array $data);
    public function deleteProductos($id);

}





?>