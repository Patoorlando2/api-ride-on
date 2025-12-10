<?php 

namespace App\Repositories;

use App\Models\Producto;
use App\Repositories\ProductoInterface;

class ProductoRepository implements ProductoInterface
{
    public function getAllProductos(){
        // return Producto::all();
        // Carga los productos y, para cada producto, carga la relación 'imagen'
        $productos = Producto::with('imagen', 'categoria')->get();
        return $productos;
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