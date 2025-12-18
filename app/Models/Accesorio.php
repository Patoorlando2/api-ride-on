<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model
{
    protected $table = "accesorios";

    protected $fillable = ['nombre_accesorio', 'descripcion', 'precio', 'stock', 'destacados', 'id_imagen'];

    protected $primaryKey = 'id_accesorio';

    public function imagen(){
        return $this->belongsTo(Imagen::class, 'id_imagen', 'id_imagen');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }
}


   