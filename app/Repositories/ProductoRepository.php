<?php 

namespace App\Repositories;

use App\Models\Producto;
use App\Repositories\ProductoInterface;

class ProductoRepository implements ProductoInterface
{
    public function getAllProductos(){
        return Producto::all();
    }

    public function getProductosById($id){
        return Producto::find($id);
    }

    public function createProductos($data){
        return Producto::create($data);
    }

    public function updateProductos($id, array $data){
        $producto = Producto::find($id);
        if ($producto) {
            $producto->update($data);
            return $producto;
        }
        return null;
    }

    public function deleteProductos($id){
        return Producto::destroy($id);
    }


}



?>