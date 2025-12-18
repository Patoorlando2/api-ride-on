<?php

namespace Database\Seeders;

use App\Models\Accesorio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccesorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accesorio::insert([
            [
                'nombre_accesorio' => 'Guantes',
                'descripcion' => 'Guantes',
                'precio' => 120000,
                'stock' => 5,
                'destacados' => 1
            ]
        ]);
    }
}
