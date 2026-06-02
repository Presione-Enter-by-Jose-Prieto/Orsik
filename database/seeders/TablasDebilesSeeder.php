<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablasDebilesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tipo_nuip')->insertOrIgnore([
            ['nombre' => 'CC'],
            ['nombre' => 'TI'],
            ['nombre' => 'CE'],
        ]);

        DB::table('nivel_formacion')->insertOrIgnore([
            ['nombre' => 'Técnico'],
            ['nombre' => 'Tecnólogo'],
            ['nombre' => 'Profesional'],
            ['nombre' => 'Maestría']
        ]);

        DB::table('tipo_contrato')->insertOrIgnore([
            ['nombre' => 'Planta'],
            ['nombre' => 'Contratista'],
        ]);

        DB::table('especialidad')->insertOrIgnore([
            ['nombre' => 'Sistemas'],
            ['nombre' => 'Electrónica'],
        ]);

        DB::table('estado')->insertOrIgnore([
            ['nombre' => 'Activo'],
            ['nombre' => 'Inactivo'],
        ]);

        DB::table('jornada')->insertOrIgnore([
            ['nombre' => 'Diurna'],
            ['nombre' => 'Mixta'],
            ['nombre' => 'Nocturna'],
        ]);

        DB::table('alternativa')->insertOrIgnore([
            ['nombre' => 'Contrato'],
            ['nombre' => 'Proyecto'],
        ]);

        DB::table('empresa')->insertOrIgnore([
            ['nombre' => 'Empresa1'],
            ['nombre' => 'Empresa2'],
        ]);

        DB::table('programa')->insertOrIgnore([
            ['nombre' => 'Análisis y Desarrollo de Software'],
            ['nombre' => 'Diseño Gráfico'],
        ]);

        DB::table('centro_formacion')->insertOrIgnore([
            ['nombre' => 'CIES'],
            ['nombre' => 'PESCADERO'],
        ]);
    }
}