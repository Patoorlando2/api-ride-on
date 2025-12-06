<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre_producto', 'descripcion', 'precio', 'stock', 'id_categoria', 'id_imagen', 'marca', 'modelo', 'anio', 'destacados', 'ficha_tecnica'];

    public function categoria(){

        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
