<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre_producto', 'descripcion', 'precio', 'stock', 'id_categoria', 'id_imagen', 'marca', 'modelo', 'anio', 'destacados', 'ficha_tecnica'];

    protected $primaryKey = 'id_producto';
    public function categoria(){

        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
    public function imagen()
    {
        // El producto tiene la FK id_imagen, por lo tanto, usa belongsTo.
        // Asume que tu modelo de imagen se llama 'Imagen' y su clave primaria es 'id_imagen'.
        return $this->belongsTo(Imagen::class, 'id_imagen', 'id_imagen');
    }
}
