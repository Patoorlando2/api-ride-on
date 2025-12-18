<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';
    protected $fillable = ['url_imagen', 'posicion'];

    protected $primaryKey = 'id_imagen';

    // 1. Especifica que quieres que este campo virtual aparezca en el JSON
    protected $appends = ['url_completa'];

    public function productos()
    {
        // Se relaciona con el modelo Producto, usando 'id_imagen'
        // como la clave foránea en la tabla 'productos'.
        return $this->hasMany(Producto::class, 'id_imagen', 'id_imagen');
    }

    
    public function getUrlCompletaAttribute()
    {
        $baseUrl = 'http://127.0.0.1:8000/'; 
        
        // Combina la URL base con el valor de la columna (ej. 'imagenes/filename.jpg')
        return $baseUrl . $this->attributes['url_imagen'];
    }
}
