<?php

use Illuminate\Database\Seeder;

class FixedTableSeeder extends Seeder
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
            DB::table('fixes')->truncate();

        DB::table('fixes')->insert(array(
            0 => array(
                'name'           => 'Tiempo medio de reparacion',
                'slug'           => 'MRT',
                'val'            => 0.5,
                'unit'           => 'h',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            1 => array(
                'name'           => 'Retraso tecnico medio',
                'slug'           => 'MTD',
                'val'            => 0.25,
                'unit'           => 'h',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            2 => array(
                'name'           => 'Retraso administrativo medio',
                'slug'           => 'MAD',
                'val'            => 4,
                'unit'           => 'h',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            3 => array(
                'name'           => 'Coste de persona-hora',
                'slug'           => 'CPH',
                'val'            => 15,
                'unit'           => 'UM',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            4 => array(
                'name'           => 'Coste del tiempo de parada del servicio',
                'slug'           => 'CSD',
                'val'            => 25,
                'unit'           => 'UM/min',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            5 => array(
                'name'           => 'Tiempo de rotacion',
                'slug'           => 'TAT',
                'val'            => 720,
                'unit'           => 'h',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            6 => array(
                'name'           => 'Probabilidad de carencia',
                'slug'           => 'SP',
                'val'            => 0.1,
                'unit'           => '-',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            7 => array(
                'name'           => 'Tiempo para la obtencion del LCC',
                'slug'           => 'n',
                'val'            => 10,
                'unit'           => '-',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            8 => array(
                'name'           => 'Numero de equipos porattiles para prueba de mantenimiento correctivo',
                'slug'           => '-',
                'val'            => 2,
                'unit'           => '-',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            9 => array(
                'name'           => 'Coste de un equipo portatil de prueba',
                'slug'           => 'CPTS',
                'val'            => 5000,
                'unit'           => 'UM',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            10 => array(
                'name'           => 'Coste de parada de servicio',
                'slug'           => 'CSD',
                'val'            => 5000,
                'unit'           => 'UM',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            11 => array(
                'name'           => 'Numero de acciones correctivas para el tunel de lavado',
                'slug'           => 'NCMA',
                'val'            => 16,
                'unit'           => '-',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            ),
            12 => array(
                'name'           => 'Media de cambios por ano de mantenimiento',
                'slug'           => '-',
                'val'            => 4,
                'unit'           => '-',
                'created_at'     => date('Y-m-d H:m:s'),
                'updated_at'     => date('Y-m-d H:m:s')
            )
        ));

        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
