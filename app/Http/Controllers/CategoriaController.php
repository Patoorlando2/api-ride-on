<?php

namespace App\Http\Controllers;

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
                'data' => $categorias,
                "status" => 200,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 404);
        }
    }
}
