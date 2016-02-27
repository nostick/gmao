<?php

use Illuminate\Database\Seeder;

class CodificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codifications')->insert(array(
            0 => array(
                'ubication' => 'Edificio, Patio y Talleres',
                'area' => 'Lavado y Liempieza de Troles',
                'code' => 'EPT-LLT-TLA',
                'quantity' => '1',
                'equipment_id' => '1',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            1 => array(
                'ubication' => 'Edificio, Patio y Talleres',
                'area' => 'Compresores de Aire Comprimido',
                'code' => 'EPT-CAC-SAC',
                'quantity' => '1',
                'equipment_id' => '2',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            2 => array(
                'ubication' => 'Edificio, Patio y Talleres',
                'area' => 'Área de Estación de Servicio',
                'code' => 'EPT-AES-MDD',
                'quantity' => '1',
                'equipment_id' => '3',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            3 => array(
                'ubication' => 'Edificio, Patio y Talleres',
                'area' => 'Área Hidroneumático',
                'code' => 'EPT-AHI-SHI',
                'quantity' => '1',
                'equipment_id' => '4',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            4 => array(
                'ubication' => 'Edificio, Patio y Talleres',
                'area' => 'Anden de Carroceria y Aire Acondicionado',
                'code' => 'EPT-ACA-PGR',
                'quantity' => '1',
                'equipment_id' => '5',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        ));
    }
}
