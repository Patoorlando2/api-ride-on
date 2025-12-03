<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre_producto', 'descripcion', 'precio', 'stock', 'id_categoria', 'marca', 'modelo', 'año', 'destacados', 'ficha_tecnica'];

    public function categoria(){

        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
