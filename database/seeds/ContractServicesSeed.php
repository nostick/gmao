<?php

use Illuminate\Database\Seeder;

class ContractServicesSeed extends Seeder
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
            DB::table('contract_services')->truncate();


        DB::table('contract_services')->insert(array(
            0 => array(
                'description' => 'MANTENIMIENTO DEL TANQUE DE COMBUSTIBLE DE LA MAQUINA DISPENSADORA DE DIESEL. ESTE MANTENIMIENTO SE REFIRE AL LAVADO DEL TANQUE Y CAMBIO DE FILTROS DEL TANQUE Y DE LA MAQUINA DISPENSADORA.',
                'type' => 'Serie performer/Legacy',
                'brand' => 'Gilbarco',
                'location' => 'PATIO Y TALLERES',
                'quantity' => '1',
                'maintenance' => 'A CONTRATAR',
                'observation' => 'TODO LO QUE CORRESPONDE AL SUMINISTROS DE CONSUMIBLES (FILTROS U OTROS ) DEBEN SER PROPORCIONADOS POR LA EMPRESA QUE VAYA A REALIZAR EL SERVICIO DE MANTENIMIENTO. ',
                'equipment_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        ));

        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
