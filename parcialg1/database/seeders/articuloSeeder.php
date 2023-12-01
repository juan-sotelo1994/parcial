<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class articuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'referencia'=> '12342',
                'nombre'=> 'camisa',
                'descripcion'=> 'overside',
                'color'=> 'negro',
                'precioUnitario'=> 50000,
                'observacion'=> 'ninguna',
                'foto'=> 'foto1',
                'marca'=> '104',

            ],
    
            [
                'referencia'=> '12343',
                'nombre'=> 'busos',
                'descripcion'=> 'overside',
                'color'=> 'negro',
                'precioUnitario'=> 50000,
                'observacion'=> 'ninguna',
                'foto'=> 'foto1',
                'marca'=> '104',
            ],
    
            [
                'referencia'=> '12340',
                'nombre'=> 'pantalon',
                'descripcion'=> 'overside',
                'color'=> 'negro',
                'precioUnitario'=> 50000,
                'observacion'=> 'ninguna',
                'foto'=> 'foto1',
                'marca'=> '104',
            ],
    
            [
                'referencia'=> '12348',
                'nombre'=> 'jean',
                'descripcion'=> 'overside',
                'color'=> 'negro',
                'precioUnitario'=> 50000,
                'observacion'=> 'ninguna',
                'foto'=> 'foto1',
                'marca'=> '104',
            ],
            [
                'referencia'=> '12341',
                'nombre'=> 'chaqueta',
                'descripcion'=> 'overside',
                'color'=> 'negro',
                'precioUnitario'=> 50000,
                'observacion'=> 'ninguna',
                'foto'=> 'foto1',
                'marca'=> '104',
            ],
    
         ];
         DB::table('articulo')->insert($datos);  
    }
}
