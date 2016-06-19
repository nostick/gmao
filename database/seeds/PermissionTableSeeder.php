<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
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
            DB::table('permissions')->truncate();

        DB::table('permissions')->insert(array(
            0 => array(
                'name' => 'Modulo 1',
                'slug' => 'mod1',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            1 => array(
                'name' => 'Modulo 2',
                'slug' => 'mod2',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            2 => array(
                'name' => 'Modulo 3',
                'slug' => 'mod3',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            3 => array(
                'name' => 'Modulo 4',
                'slug' => 'mod4',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            4 => array(
                'name' => 'Modulo 5',
                'slug' => 'mod5',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        ));

        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
