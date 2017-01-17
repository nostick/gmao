<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CostElementTableSeeder extends Seeder
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
            DB::table('cost_elements')->truncate();

        DB::table('cost_elements')->insert(array(
            0 => array(
                'level'       => '1',
                'name'        => 'Tunel de Lavado Automatico',
                'slug'        => 'TLA',
                'required'    => 'Todas las paradas originan costes por penalizacion',
                'quantity'    => 1,
                'cost'        => '',
                'intensity'   => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            1 => array(
                'level'       => '1',
                'name'        => 'Sistema de Aire Comprimido',
                'slug'        => 'SAC',
                'required'    => 'Todas las paradas originan costes por penalizacion',
                'quantity'    => 1,
                'cost'        => '',
                'intensity'   => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            2 => array(
                'level'       => '1',
                'name'        => 'Maquina Dispensadora de Diesel',
                'slug'        => 'MDD',
                'required'    => 'Todas las paradas originan costes por penalizacion',
                'quantity'    => 1,
                'cost'        => '',
                'intensity'   => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            3 => array(
                'level'       => '1',
                'name'        => 'Sistema Hidroneumatico',
                'slug'        => 'SHI',
                'required'    => 'Todas las paradas originan costes por penalizacion',
                'quantity'    => 1,
                'cost'        => '',
                'intensity'   => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            4 => array(
                'level'       => '1',
                'name'        => 'Puente Grua',
                'slug'        => 'PGR',
                'required'    => 'Todas las paradas originan costes por penalizacion',
                'quantity'    => 1,
                'cost'        => '',
                'intensity'   => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            5 => array(
                'level'       => '2',
                'name'        => 'Sistemas de Cepillos Giratorios',
                'slug'        => 'SCG',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            6 => array(
                'level'       => '2',
                'name'        => 'Tablero de control electronico',
                'slug'        => 'TCE',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 795,
                'intensity'   => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            7 => array(
                'level'       => '2',
                'name'        => 'Sistema dispensador de champu',
                'slug'        => 'SDC',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            8 => array(
                'level'       => '2',
                'name'        => 'Sistema de bombeo',
                'slug'        => 'SDB',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            9 => array(
                'level'       => '3',
                'name'        => 'Compresores',
                'slug'        => 'COM1',
                'required'    => '',
                'quantity'    => 2,
                'cost'        => 20500,
                'intensity'   => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            10 => array(
                'level'       => '3',
                'name'        => 'Sistema de filtrado',
                'slug'        => 'SDF',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            11 => array(
                'level'       => '3',
                'name'        => 'Sistema de transmision',
                'slug'        => 'SDT',
                'required'    => '',
                'quantity'    => 2,
                'cost'        => 7000,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            12 => array(
                'level'       => '3',
                'name'        => 'Sistema de refrigeracion y condensado',
                'slug'        => 'SRC',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 2000,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            13 => array(
                'level'       => '4',
                'name'        => 'Tablero de control',
                'slug'        => 'TDC1',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 5000,
                'intensity'   => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            14 => array(
                'level'       => '4',
                'name'        => 'Sistema dispensador',
                'slug'        => 'SDI',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            15 => array(
                'level'       => '4',
                'name'        => 'Linea de succion',
                'slug'        => 'LDS',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            16 => array(
                'level'       => '4',
                'name'        => 'Tanque de combustible',
                'slug'        => 'TCB',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 5000,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            17 => array(
                'level'       => '4',
                'name'        => 'Sistema de bombeo',
                'slug'        => 'SB1',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 4000,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            18 => array(
                'level'       => '4',
                'name'        => 'Sistema de filtrado',
                'slug'        => 'SFI',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 3000,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            19 => array(
                'level'       => '5',
                'name'        => 'Tablero de Control',
                'slug'        => 'TDC2',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            20 => array(
                'level'       => '5',
                'name'        => 'Sistema de bombeo',
                'slug'        => 'SB2',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            21 => array(
                'level'       => '5',
                'name'        => 'Sistema de purga',
                'slug'        => 'SDP',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 2000,
                'intensity'   => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            22  => array(
                'level'       => '5',
                'name'        => 'Compresor',
                'slug'        => 'COM2',
                'required'    => '',
                'quantity'    => 2,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            23 => array(
                'level'       => '5',
                'name'        => 'Sistema de tuberias',
                'slug'        => 'STU',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            24 => array(
                'level'       => '5',
                'name'        => 'Sistema de valvulas e impelente',
                'slug'        => 'SVI',
                'required'    => '',
                'quantity'    => 2,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            25 => array(
                'level'       => '5',
                'name'        => 'Sistema electrico',
                'slug'        => 'SE1',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            26 => array(
                'level'       => '5',
                'name'        => 'Tanque de presion',
                'slug'        => 'TDP',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 3000,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            27 => array(
                'level'       => '5',
                'name'        => 'Instrumentos de control',
                'slug'        => 'IDC',
                'required'    => '',
                'quantity'    => 2,
                'cost'        => 0,
                'intensity'   => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            28 => array(
                'level'       => '6',
                'name'        => 'Elemento de elevacion',
                'slug'        => 'EDE',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 1000,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            29 => array(
                'level'       => '6',
                'name'        => 'Carro',
                'slug'        => 'CRR',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 5000,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            30 => array(
                'level'       => '6',
                'name'        => 'Puente',
                'slug'        => 'PTE',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 3000,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            31 => array(
                'level'       => '6',
                'name'        => 'Sistema electrico',
                'slug'        => 'SE2',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 2500,
                'intensity'   => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            32 => array(
                'level'       => '6',
                'name'        => 'Sistema de testeros',
                'slug'        => 'SDT',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 2000,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            33 => array(
                'level'       => '7',
                'name'        => 'Cepillos y eje',
                'slug'        => 'CYE',
                'required'    => '',
                'quantity'    => 4,
                'cost'        => 1200,
                'intensity'   => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            34 => array(
                'level'       => '7',
                'name'        => 'Sistema de desplazamineto de cepillos',
                'slug'        => 'SDC',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 2000,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            35 => array(
                'level'       => '8',
                'name'        => 'Membrana',
                'slug'        => 'MBR',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 300,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            36 => array(
                'level'       => '8',
                'name'        => 'Rodamientos',
                'slug'        => 'RDS',
                'required'    => '',
                'quantity'    => 4,
                'cost'        => 100,
                'intensity'   => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            37 => array(
                'level'       => '10',
                'name'        => 'Filtro de aire',
                'slug'        => 'FDA',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 150,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            38 => array(
                'level'       => '10',
                'name'        => 'Filtro de aspiracion',
                'slug'        => 'FAS',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 200,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            39 => array(
                'level'       => '10',
                'name'        => 'Filtro separador de aceite',
                'slug'        => 'FSA',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 300,
                'intensity'   => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            40 => array(
                'level'       => '9',
                'name'        => 'Chumaceras',
                'slug'        => 'CHU',
                'required'    => '',
                'quantity'    => 4,
                'cost'        => 400,
                'intensity'   => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            41 => array(
                'level'       => '9',
                'name'        => 'Sellos',
                'slug'        => 'SLL',
                'required'    => '',
                'quantity'    => 2,
                'cost'        => 200,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            42 => array(
                'level'       => '11',
                'name'        => 'Carcasa del surtidor',
                'slug'        => 'CDS',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 90,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            43 => array(
                'level'       => '11',
                'name'        => 'Boquillas surtidoras',
                'slug'        => 'BSU',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 85,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            44 => array(
                'level'       => '12',
                'name'        => 'Colador',
                'slug'        => 'CDR',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 100,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            45 => array(
                'level'       => '12',
                'name'        => 'Malla',
                'slug'        => 'MLL',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 100,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            46 => array(
                'level'       => '13',
                'name'        => 'Terminales de conexion',
                'slug'        => 'TDC',
                'required'    => '',
                'quantity'    => 22,
                'cost'        => 20,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            47 => array(
                'level'       => '13',
                'name'        => 'Contactores,reles y solenoides',
                'slug'        => 'CRS',
                'required'    => '',
                'quantity'    => 2,
                'cost'        => 30,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            48 => array(
                'level'       => '14',
                'name'        => 'Anclaje de las bombas',
                'slug'        => 'ADB',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 30,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            49 => array(
                'level'       => '15',
                'name'        => 'Correas',
                'slug'        => 'CRR',
                'required'    => '',
                'quantity'    => 2,
                'cost'        => 00,
                'intensity'   => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            50 => array(
                'level'       => '16',
                'name'        => 'Uniones',
                'slug'        => 'UNI',
                'required'    => '',
                'quantity'    => 6,
                'cost'        => 50,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            51 => array(
                'level'       => '16',
                'name'        => 'Valvulas de drenaje, check y compuerta',
                'slug'        => 'VDCC',
                'required'    => '',
                'quantity'    => 10,
                'cost'        => 95,
                'intensity'   => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            52 => array(
                'level'       => '17',
                'name'        => 'Sellos mecanicos',
                'slug'        => 'SMC',
                'required'    => '',
                'quantity'    => 10,
                'cost'        => 5,
                'intensity'   => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            53 => array(
                'level'       => '17',
                'name'        => 'Rodamiento',
                'slug'        => 'RDM',
                'required'    => '',
                'quantity'    => 10,
                'cost'        => 135,
                'intensity'   => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            54 => array(
                'level'       => '18',
                'name'        => 'Bobinas',
                'slug'        => 'BOB',
                'required'    => '',
                'quantity'    => 1,
                'cost'        => 90,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            55 => array(
                'level'       => '19',
                'name'        => 'Presostatos',
                'slug'        => 'PST',
                'required'    => '',
                'quantity'    => 6,
                'cost'        => 30,
                'intensity'   => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            56 => array(
                'level'       => '19',
                'name'        => 'Manometros',
                'slug'        => 'MNM',
                'required'    => '',
                'quantity'    => 4,
                'cost'        => 22,
                'intensity'   => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        ));

        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
