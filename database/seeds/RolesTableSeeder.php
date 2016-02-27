<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array(
            0 => array(
                'name' => 'SuperAdmin',
                'slug' => 'superadmin',
                'description' => 'Role supervisor',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            1 => array(
                'name' => 'Supervisor',
                'slug' => 'supervisor',
                'description' => 'Supervisor del sistema',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            2 => array(
                'name' => 'Jefe',
                'slug' => 'jefe',
                'description' => 'Jefe Encargado',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            3 => array(
                'name' => 'Obrero',
                'slug' => 'obrero',
                'description' => 'Obrero trabajador de la empresa',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        ));
    }
}
