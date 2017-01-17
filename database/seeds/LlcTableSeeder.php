<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LlcTableSeeder extends Seeder
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
            DB::table('llc')->truncate();

        DB::table('llc')->insert(array(
            0 => array(
                'condition'       => 'Mean repair time',
                'slug'            => 'MRT',
                'mean'            => 'Tiempo medio de reparacion',
                'value'           => 0.5,
                'value_unit'      => '0,5 h',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            1 => array(
                'condition'       => 'Mean technical delay',
                'slug'            => 'MTD',
                'mean'            => 'Retraso tecnico medio',
                'value'           => 0.25,
                'value_unit'      => '0,25 h',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            2 => array(
                'condition'       => 'Mean administrative delay',
                'slug'            => 'MAD',
                'mean'            => 'Retraso administrativo medio',
                'value'           => 4,
                'value_unit'      => '4 h',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            3 => array(
                'condition'       => 'Cost per person hour',
                'slug'            => 'CPH',
                'mean'            => 'Coste de persona-hore',
                'value'           => 15,
                'value_unit'      => '15 UM',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            4 => array(
                'condition'       => 'Cost for service downtime',
                'slug'            => 'CSD',
                'mean'            => 'Coste del tiempo de parada del servicio',
                'value'           => 25,
                'value_unit'      => '25 UM/min',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            5 => array(
                'condition'       => 'Turn-around-time',
                'slug'            => 'TAT',
                'mean'            => 'Tiempo de rotacion',
                'value'           => 720,
                'value_unit'      => '720 h',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            6 => array(
                'condition'       => 'Shortage probability',
                'slug'            => 'SP',
                'mean'            => 'Probabilidad de carencia',
                'value'           => 0.01,
                'value_unit'      => '',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            7 => array(
                'condition'       => 'Time for LCC',
                'slug'            => 'n',
                'mean'            => 'Tiempo para la obtencion del LCC',
                'value'           => 10,
                'value_unit'      => '',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            8 => array(
                'condition'       => '-',
                'slug'            => '-',
                'mean'            => 'Numero de equipos portatiles para prueba de mantenimiento correctivo',
                'value'           => 2,
                'value_unit'      => '',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            9 => array(
                'condition'       => 'Cost per test spare',
                'slug'            => 'CPTS',
                'mean'            => 'Coste de un equipo portatil de prueba',
                'value'           => 5000,
                'value_unit'      => '5000 UM',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            10 => array(
                'condition'       => 'Number of corrective maintenance actions',
                'slug'            => 'NCMA',
                'mean'            => 'Numero de acciones correctivas para el tunel de lavado',
                'value'           => 16,
                'value_unit'      => '16',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            11 => array(
                'condition'       => 'Media de cambios por ano de mantenimiento preventivo',
                'slug'            => '-',
                'mean'            => '-',
                'value'           => 4,
                'value_unit'      => '',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
            12 => array(
                'condition'       => '-',
                'slug'            => 'CSD',
                'mean'            => 'Coste de parada de servicio',
                'value'           => 5000,
                'value_unit'      => '5000 UM',
                'created_at'      => date('Y-m-d H:m:s'),
                'updated_at'      => date('Y-m-d H:m:s')
            ),
        ));

        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
