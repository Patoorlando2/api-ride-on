<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use Illuminate\Http\Request;

class AccesorioController extends Controller
{
   
    public function index(){

        try {
            $accesorios = Accesorio::with('imagen', 'categoria')->get();

            if ($accesorios->isEmpty()) {
                return response()->json([
                    'status' => 200,
                    'data' => [],
                    'message' => 'No se han encontrado accesorios.'
                ], 200);
            }

            return response()->json([
                'status' => 200,
                'data' => $accesorios,
                'message' => 'Se han encontrado los datos exitosamente'
            ], 200);


        } catch (\Throwable $th) {

            return response()->json([
                'status' => 500,
                'message' => 'Ha habido error del servidor'
            ], 500);
        }
    }
}
