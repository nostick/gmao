<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferencesValue extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        if(env('DB_DRIVER') == 'mysql')
            DB::table('references_values')->truncate();



        DB::table('references_values')->insert(array(
            0 => array(
                'cost' => 'COM',
                'definition' => 'Coste de la Operacion y Mantenimiento',
                'equation' => '',
                'value' => 400972,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            1 => array(
                'cost' => 'CIM',
                'definition' => 'Coste de la Inversion de Mantenimiento',
                'equation' => '',
                'value' => 67482,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            2 => array(
                'cost' => 'CIMSRU',
                'definition' => 'Costes de los repuestos de unidades reemplazables',
                'equation' => 'Modelo matematico simple realizado por el programa',
                'value' => 17482,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            3 => array(
                'cost' => 'CIMFS',
                'definition' => 'Costes de Mantenimiento Correctivo de los equipos de planta',
                'equation' => 'Modelo matematico simple realizado por el programa',
                'value' => 10000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            4 => array(
                'cost' => 'CIMFW',
                'definition' => 'Coste de equipamiento en taller con valor constante para todos los equipos',
                'equation' => 'Modelo matematico simple realizado por el programa',
                'value' => 40000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            5 => array(
                'cost' => 'CYO',
                'definition' => 'Costes de Operacion del Mantenimiento',
                'equation' => '',
                'value' => 135792.078,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            6 => array(
                'cost' => 'CYOU',
                'definition' => 'Costes de la penalizacion por paradas',
                'equation' => 'Modelo matematico simple realizado por el programa',
                'value' => 135792.078,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            7 => array(
                'cost' => 'CYMP',
                'definition' => 'Costes de mantenimientos preventivos para cada subsistema',
                'equation' => 'Modelo matematico simple realizado por el programa',
                'value' => 13690,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            8 => array(
                'cost' => 'CYMC',
                'definition' => 'Coste de mantenimientos correctivospara cada subsistema',
                'equation' => 'Modelo matematico simple realizado por el programa',
                'value' => 319800,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            9 => array(
                'cost' => 'CYM',
                'definition' => 'Coste total de mantenimiento',
                'equation' => '',
                'value' => 333490,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
        ));

        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
