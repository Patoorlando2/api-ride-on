<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Validator;

class NewsletterController extends Controller
{
   
   public function create(Request $request)
    {
        // 1. Validar los datos
        // Usamos el validador de Laravel para asegurar que el campo 'email' existe y es un correo válido.
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletters,email', // 'newsletters' es el nombre de tu tabla
        ], [
            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'Debes ingresar un formato de correo válido.',
            'email.unique' => 'Este email ya está registrado en nuestra lista.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validación',
                'errors' => $validator->errors()
            ], 422); // Código 422 para errores de entidad no procesable
        }

        // 2. Insertar el dato en la base de datos
        try {
            Newsletter::create([
                'email' => $request->input('email'),
                // 'created_at' y 'updated_at' se manejan automáticamente por Laravel
            ]);

            // 3. Respuesta exitosa
            return response()->json([
                'success' => true,
                'message' => '¡Suscripción exitosa!',
            ], 201); // Código 201 para recurso creado
            
        } catch (\Exception $e) {
            // Manejo de otros errores de base de datos
            return response()->json([
                'success' => false,
                'message' => 'Error interno al guardar la suscripción.',
                'error_detail' => $e->getMessage()
            ], 500); // Código 500 para error interno del servidor
        }
    }
}
