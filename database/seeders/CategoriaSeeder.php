<?php

namespace Database\Seeders;

use App\Models\Categoria;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'categoria' => 'Enduro',
                'created_at' => now(),
        'updated_at' => now(),
            ],
            [
                'categoria' => 'Street',
                'created_at' => now(),
        'updated_at' => now(),
            ],
            [
                'categoria' => 'Naked',
                'created_at' => now(),
        'updated_at' => now(),
            ],
            [
                'categoria' => 'Scooter',
                'created_at' => now(),
        'updated_at' => now(),
            ],
            [
                'categoria' => 'Touring',
                'created_at' => now(),
        'updated_at' => now(),
            ],
            [
                'categoria' => 'CUB',
                'created_at' => now(),
        'updated_at' => now(),
            ],
            [
                'categoria' => 'Motard',
                'created_at' => now(),
        'updated_at' => now(),
            ],
            [
                'categoria' => 'Supersport',
                'created_at' => now(),
        'updated_at' => now(),
            ]
        ]);
    }
     
}
