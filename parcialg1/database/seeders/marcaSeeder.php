<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class marcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos= [
        [
            'idMarca'=> '100',
            'descripcion'=> 'Nike'
        ],
        [
            'idMarca'=> '101',
            'descripcion'=> 'Puma'
        ],
        [
            'idMarca'=> '102',
            'descripcion'=> 'Adidas'
        ],
        [
            'idMarca'=> '103',
            'descripcion'=> 'File'
        ],
        [
            'idMarca'=> '104',
            'descripcion'=> '>Reebok'
        ],

        ];
        DB::table('marca')->insert($datos);
    }
}
