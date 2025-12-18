<?php


namespace App\Services;


use App\Repositories\CategoriaInterface;
use Exception;

class CategoriaService{

    protected $categoriarepository;

    public function __construct(CategoriaInterface $categoriarepository){

        $this->categoriarepository = $categoriarepository;
    }


    public function obtenerCategoriaPorTipo($tipo){
        try {
           return $this->categoriarepository->getCategoriasPorTipo($tipo);

        } catch (\Throwable $th) {
            return [
                "message" => $th->getMessage()
            ];
        }
    }

}