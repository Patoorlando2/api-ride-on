<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre_producto' => 'Kymco DownTown 250i',
                'descripcion' => '',
                'precio' => '',
                'stock' => '',
                'id_categoria' => '',
                'id_imagen' => '',
                

            ]
        ]);
    }
}
