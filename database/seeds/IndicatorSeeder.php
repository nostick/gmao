<?php

use Illuminate\Database\Seeder;

class IndicatorSeeder extends Seeder
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
            DB::table('indicators')->truncate();

        DB::table('indicators')->insert(array(
            0 => array(
                'equipment_id'   => 1,
                'system_id'      => 1,
                'sub_system_id'  => 1,
                'name'           => 'Cepillos y Eje',
                'slug'           => 'CYE',
                'Z'              => 8,
                'UM'             => 1200,
                'N'              => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            1 => array(
                'equipment_id'   => 1,
                'system_id'      => 1,
                'sub_system_id'  => 2,
                'name'           => 'Sistema de desplazamiento de cepillos',
                'slug'           => 'SDC',
                'Z'              => 2,
                'UM'             => 2000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            2 => array(
                'equipment_id'   => 1,
                'system_id'      => 2,
                'sub_system_id'  => null,
                'name'           => 'Tablero de control electronico',
                'slug'           => 'TCE',
                'Z'              => 3,
                'UM'             => 795,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            3 => array(
                'equipment_id'   => 1,
                'system_id'      => 3,
                'sub_system_id'  => 4,
                'name'           => 'Membrana',
                'slug'           => 'MBR',
                'Z'              => 2,
                'UM'             => 300,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            4 => array(
                'equipment_id'   => 1,
                'system_id'      => 3,
                'sub_system_id'  => 5,
                'name'           => 'Rodamientos',
                'slug'           => 'RDS',
                'Z'              => 3,
                'UM'             => 100,
                'N'              => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            5 => array(
                'equipment_id'   => 1,
                'system_id'      => 4,
                'sub_system_id'  => 6,
                'name'           => 'Chumaceras',
                'slug'           => 'CHU',
                'Z'              => 4,
                'UM'             => 400,
                'N'              => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            6 => array(
                'equipment_id'   => 1,
                'system_id'      => 4,
                'sub_system_id'  => 9,
                'name'           => 'Sellos',
                'slug'           => 'SLL',
                'Z'              => 2,
                'UM'             => 200,
                'N'              => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            7 => array(
                'equipment_id'   => 2,
                'system_id'      => 6,
                'sub_system_id'  => 10,
                'name'           => 'Filtro de aire',
                'slug'           => 'FDA',
                'Z'              => 2,
                'UM'             => 150,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            8 => array(
                'equipment_id'   => 2,
                'system_id'      => 6,
                'sub_system_id'  => 11,
                'name'           => 'Filtro de aspiracion',
                'slug'           => 'FAS',
                'Z'              => 1,
                'UM'             => 200,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            9 => array(
                'equipment_id'   => 2,
                'system_id'      => 6,
                'sub_system_id'  => 12,
                'name'           => 'Filtro separador de aceite',
                'slug'           => 'FSA',
                'Z'              => 3,
                'UM'             => 300,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            10 => array(
                'equipment_id'   => 3,
                'system_id'      => 10,
                'sub_system_id'  => 15,
                'name'           => 'Carcasa del surtidor',
                'slug'           => 'CDS',
                'Z'              => 0,
                'UM'             => 90,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            11 => array(
                'equipment_id'   => 3,
                'system_id'      => 10,
                'sub_system_id'  => 16,
                'name'           => 'Boquillas surtidoras',
                'slug'           => 'BSU',
                'Z'              => 0,
                'UM'             => 85,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            12 => array(
                'equipment_id'   => 3,
                'system_id'      => 11,
                'sub_system_id'  => 17,
                'name'           => 'Colador',
                'slug'           => 'CDR',
                'Z'              => 1,
                'UM'             => 100,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            13 => array(
                'equipment_id'   => 3,
                'system_id'      => 11,
                'sub_system_id'  => 18,
                'name'           => 'Malla',
                'slug'           => 'MLL',
                'Z'              => 0,
                'UM'             => 100,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            14 => array(
                'equipment_id'   => 4,
                'system_id'      => 15,
                'sub_system_id'  => 22,
                'name'           => 'Terminales de conexion',
                'slug'           => 'TDC',
                'Z'              => 2,
                'UM'             => 20,
                'N'              => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            15 => array(
                'equipment_id'   => 4,
                'system_id'      => 15,
                'sub_system_id'  => 23,
                'name'           => 'Contactores, reles y solenoides',
                'slug'           => 'CRS',
                'Z'              => 2,
                'UM'             => 30,
                'N'              => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            16 => array(
                'equipment_id'   => 4,
                'system_id'      => 13,
                'sub_system_id'  => 20,
                'name'           => 'Anclaje de las bombas',
                'slug'           => 'ADB',
                'Z'              => 0,
                'UM'             => 30,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            17 => array(
                'equipment_id'   => 4,
                'system_id'      => 18,
                'sub_system_id'  => 26,
                'name'           => 'Correas',
                'slug'           => 'CRR',
                'Z'              => 5,
                'UM'             => 30,
                'N'              => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            18 => array(
                'equipment_id'   => 4,
                'system_id'      => 19,
                'sub_system_id'  => 27,
                'name'           => 'Uniones',
                'slug'           => 'UNI',
                'Z'              => 0,
                'UM'             => 50,
                'N'              => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            19 => array(
                'equipment_id'   => 4,
                'system_id'      => 19,
                'sub_system_id'  => 21,
                'name'           => 'Valvulas de drenaje, check y compuerta',
                'slug'           => 'VDCC',
                'Z'              => 3,
                'UM'             => 95,
                'N'              => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            20 => array(
                'equipment_id'   => 4,
                'system_id'      => 20,
                'sub_system_id'  => 28,
                'name'           => 'Sellos mecanicos',
                'slug'           => 'SMC',
                'Z'              => 1,
                'UM'             => 5,
                'N'              => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            21 => array(
                'equipment_id'   => 4,
                'system_id'      => 20,
                'sub_system_id'  => 29,
                'name'           => 'Rodamiento',
                'slug'           => 'RDM',
                'Z'              => 4,
                'UM'             => 135,
                'N'              => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            22 => array(
                'equipment_id'   => 4,
                'system_id'      => 21,
                'sub_system_id'  => 30,
                'name'           => 'Bobinas',
                'slug'           => 'BOB',
                'Z'              => 2,
                'UM'             => 90,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            23 => array(
                'equipment_id'   => 4,
                'system_id'      => 22,
                'sub_system_id'  => 31,
                'name'           => 'Presostatos',
                'slug'           => 'PST',
                'Z'              => 2,
                'UM'             => 30,
                'N'              => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            24 => array(
                'equipment_id'   => 4,
                'system_id'      => 22,
                'sub_system_id'  => 32,
                'name'           => 'Manometros',
                'slug'           => 'MNM',
                'Z'              => 3,
                'UM'             => 22,
                'N'              => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            25 => array(
                'equipment_id'   => 2,
                'system_id'      => 5,
                'sub_system_id'  => null,
                'name'           => 'Compresores',
                'slug'           => 'COM1',
                'Z'              => 4,
                'UM'             => 20500,
                'N'              => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            26 => array(
                'equipment_id'   => 2,
                'system_id'      => 7,
                'sub_system_id'  => null,
                'name'           => 'Sistema de transmision',
                'slug'           => 'SDT',
                'Z'              => 2,
                'UM'             => 7000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            27 => array(
                'equipment_id'   => 2,
                'system_id'      => 8,
                'sub_system_id'  => null,
                'name'           => 'Sistema de refrigeracion y condensado',
                'slug'           => 'SRC',
                'Z'              => 2,
                'UM'             => 2000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            28 => array(
                'equipment_id'   => 3,
                'system_id'      => 9,
                'sub_system_id'  => null,
                'name'           => 'Tablero de control',
                'slug'           => 'TDC1',
                'Z'              => 3,
                'UM'             => 5000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            29 => array(
                'equipment_id'   => 3,
                'system_id'      => 13,
                'sub_system_id'  => null,
                'name'           => 'Tanque de combustible',
                'slug'           => 'TCB',
                'Z'              => 1,
                'UM'             => 5000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            30 => array(
                'equipment_id'   => 3,
                'system_id'      => 16,
                'sub_system_id'  => null,
                'name'           => 'Sistema de bombeo',
                'slug'           => 'SBI',
                'Z'              => 2,
                'UM'             => 4000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            31 => array(
                'equipment_id'   => 3,
                'system_id'      => 14,
                'sub_system_id'  => null,
                'name'           => 'Sistema de filtrado',
                'slug'           => 'SFI',
                'Z'              => 1,
                'UM'             => 3000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            32 => array(
                'equipment_id'   => 4,
                'system_id'      => 17,
                'sub_system_id'  => null,
                'name'           => 'Sistema de purga',
                'slug'           => 'SDP',
                'Z'              => 3,
                'UM'             => 2000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            33 => array(
                'equipment_id'   => 4,
                'system_id'      => 16,
                'sub_system_id'  => null,
                'name'           => 'Tanque de presion',
                'slug'           => 'TDP',
                'Z'              => 2,
                'UM'             => 3000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            34 => array(
                'equipment_id'   => 5,
                'system_id'      => 23,
                'sub_system_id'  => null,
                'name'           => 'Elemento de elevacion',
                'slug'           => 'EDE',
                'Z'              => 1,
                'UM'             => 1000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            35 => array(
                'equipment_id'   => 5,
                'system_id'      => 24,
                'sub_system_id'  => null,
                'name'           => 'Carro',
                'slug'           => 'CRR',
                'Z'              => 2,
                'UM'             => 5000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            36 => array(
                'equipment_id'   => 5,
                'system_id'      => 25,
                'sub_system_id'  => null,
                'name'           => 'Puente',
                'slug'           => 'PTE',
                'Z'              => 0,
                'UM'             => 3000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            37 => array(
                'equipment_id'   => 5,
                'system_id'      => 26,
                'sub_system_id'  => null,
                'name'           => 'Sistema electrico',
                'slug'           => 'SE2',
                'Z'              => 4,
                'UM'             => 2500,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            38 => array(
                'equipment_id'   => 5,
                'system_id'      => 27,
                'sub_system_id'  => null,
                'name'           => 'Sistema de testeros',
                'slug'           => 'SDT',
                'Z'              => 1,
                'UM'             => 2000,
                'N'              => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        ));


        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
