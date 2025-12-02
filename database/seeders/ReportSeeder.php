<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reports')->insert([
            [
                'titulo' => 'Fuga de agua',
                'categoria' => 'Servicios Públicos',
                'descripcion' => 'Se detecta fuga de agua en la calle principal.',
                'estado' => 'pendiente'
            ],
            [
                'titulo' => 'Luminaria apagada',
                'categoria' => 'Alumbrado',
                'descripcion' => 'Farola sin luz en el parque.',
                'estado' => 'pendiente'
            ],
            [
                'titulo' => 'Bache grande',
                'categoria' => 'Infraestructura',
                'descripcion' => 'Bache peligroso cerca de la secundaria.',
                'estado' => 'pendiente'
            ],
        ]);
    }
}
