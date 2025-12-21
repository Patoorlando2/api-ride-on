<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Services\CategoriaService;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{   
    protected $categoriaService;

    public function __construct(CategoriaService $categoriaService)
    {
        $this->categoriaService = $categoriaService;
    }

    public function obtenerCategoriasPorTipo($tipo){

        try {
            $categorias = $this->categoriaService->obtenerCategoriaPorTipo($tipo);
            return response()->json([
                'status' => 200,
                'data' => $categorias,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 404);
        }
    }

    public function obtenerCategorias(){

        return Categoria::all();
    }

}
