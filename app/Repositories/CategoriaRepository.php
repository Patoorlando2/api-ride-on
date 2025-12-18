<?php 

namespace App\Repositories;

use App\Models\Categoria;
use Exception;


class CategoriaRepository implements CategoriaInterface {

    public function getCategoriasPorTipo($tipo){

        $catPorTipo = Categoria::where('tipo', '=', $tipo)->get();

        if ($catPorTipo->isEmpty()) {
            throw new Exception('No se encontraron categorías para el tipo indicado');
        }

        return $catPorTipo;
    }


}
