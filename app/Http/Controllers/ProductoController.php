<?php

namespace App\Http\Controllers;

use App\Services\ProductoService;

use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class ProductoController extends Controller
{
    protected $productoService;

    public function __construct(ProductoService $productoService){

        $this->productoService = $productoService;
    }

    public function index()
    {
        // el controller solo interactua con el service
        try {
            $productos = $this->productoService->obtenerTodosLosProductos();
            return response()->json([
                'status' => 200,
                'data' => $productos
            ], 200);
        } catch (Throwable $th) {
            return response()->json([
                'status' => 404,
                'message' => $th->getMessage()
            ], 200);
        }
    }

    public function create(Request $request){
        try {
            $data = $request->all();
            $result = $this->productoService->crearNuevoProducto($data);

            return response()->json([
                'status' => 200,
                'message' => "Se ha creado con exito.",
                "data" => $result
            ]);

        } catch (Throwable $e) {

            return response()->json([
                "status" => 500,
                "message" => "Error: " . $e->getMessage(),
                "line" => $e->getLine(),
                "file" => $e->getFile()
            ]);
        }
    }


    public function show($id)
    {
        try {
            $data = $this->productoService->obtenerProductoPorId($id);

            if (!$data) {
                return response()->json([
                    "status" => 404,
                    "message" => "Producto no encontrado"
                ], 404);
            }
            
            return response()->json([
                "status" => 201,
                "message" => "Producto mostrado correctamente",
                "data" => $data
            ]);

        } catch (Exception $e) {
            return response()->json([
                "status" => 500,
                "message" => "Error al obtener el producto: " . $e->getMessage()
            ], 500);
        }   
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
