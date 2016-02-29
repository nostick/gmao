<?php

use Illuminate\Database\Seeder;

class ItemsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert(array(
            0 => array(
                'description' => 'BOMBA DE BAJA PRESION EN ACERO INOXIDABLE: HMAX 68M, Q= 5.7m³/h, PMAX= 16 bar, TMAX= 120ºC, N= 2900 1/MIN',
                'type' => '45HP',
                'model' => 'A96448573P10221',
                'brand' => 'GRUNDFOS 4HP',
                'quantity' => '1',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            1 => array(
                'description' => 'BOMBA DOSIFICADOR MAGNETICA DE MEMBRANA 4 BAR CON MOTOR ATB 400/230V, 1.95/3.35A, 0.75kW; 1420 rev/min; 50 Hz',
                'type' => 'POMPA',
                'model' => 'CMSCO 0720FP 230VAC',
                'brand' => 'ProMinent',
                'quantity' => '1',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            2 => array(
                'description' => 'BOMBA DE ALTA PRESIÓN DE PISTONES CERÁMICOS PMAX= 2000 PSI, 1725 RPM',
                'type' => '15HP',
                'model' => 'N° HO980A',
                'brand' => 'BAWK',
                'quantity' => '1',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            3 => array(
                'description' => 'MOTOR EN CEPILLOS',
                'type' => 'MOTOR ABB O AEG',
                'model' => ' ',
                'brand' => 'S/I',
                'quantity' => '4',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            4 => array(
                'description' => 'REDUCTORES',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'ECHESA',
                'quantity' => '4',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            5 => array(
                'description' => 'TABLERO DE CONTROL ELECTRONICO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'PRODLCO C.A.',
                'quantity' => '1',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            6 => array(
                'description' => 'CEPILLOS GIRATORIOS',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '4',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            7 => array(
                'description' => 'TANQUE DE AGUA 750 L Y SENSORES',
                'type' => '750 Lt',
                'model' => 'PLASTICO AZUL',
                'brand' => 'AQUABLOCK',
                'quantity' => '1',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            8 => array(
                'description' => 'COMPRESORES',
                'type' => 'QUINCY-30',
                'model' => ' ',
                'brand' => 'QUINCY',
                'quantity' => '2',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            9 => array(
                'description' => 'TANQUE DE RESERVA 600 GALONES',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '1',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            10 => array(
                'description' => 'PURIFICADOR DE AIRE',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '1',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            11 => array(
                'description' => 'PICO SURTIDOR E/S',
                'type' => 'Serie performer',
                'model' => 'Legacy',
                'brand' => 'Gilbarco',
                'quantity' => '2',
                'equipment_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            12 => array(
                'description' => 'BOMBA SUCCIONADORA',
                'type' => 'Serie performer',
                'model' => 'Legacy',
                'brand' => 'Gilbarco',
                'quantity' => '1',
                'equipment_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            13 => array(
                'description' => 'TABLERO DE CONTROL ELECTRONICO',
                'type' => 'Serie performer',
                'model' => 'Legacy',
                'brand' => 'Gilbarco',
                'quantity' => '1',
                'equipment_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            14 => array(
                'description' => 'TANQUE',
                'type' => 'Serie performer',
                'model' => 'Legacy',
                'brand' => 'Gilbarco',
                'quantity' => '1',
                'equipment_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            15 => array(
                'description' => 'BOMBA DE SUCCIÓN (MOTOR 3.7KW/5.0 HP, WEG)',
                'type' => 'KBS MEGA BLOC',
                'model' => ' ',
                'brand' => 'KBS',
                'quantity' => '2',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            16 => array(
                'description' => 'BOMBA DE EMERGENCIA (MOTOR 44.8 HP, ABB)',
                'type' => 'KBS MEGA BLOC',
                'model' => ' ',
                'brand' => 'KBS',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            17 => array(
                'description' => 'TANQUE HIDRAULICO, PRESIÓN DE PRUEBA: 90 PSI, PRESIÓN TRABAJO 60 PSI',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'METALURGIA EBSA,CA',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            19 => array(
                'description' => 'PRESOSTATO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'FURNAS',
                'quantity' => '4',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            21 => array(
                'description' => 'MANOMETRO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '3',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            22 => array(
                'description' => 'TABLERO DE CONTROL ELECTRONICO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '2',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            23 => array(
                'description' => 'BOMBA 3HP',
                'type' => '32170',
                'model' => ' ',
                'brand' => 'BOMBASHIDRAL',
                'quantity' => '2',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            24 => array(
                'description' => 'BOMBA 15 HP',
                'type' => 'CLR-1.1/4/200',
                'model' => '15T',
                'brand' => 'BOMBAGUA',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            25 => array(
                'description' => 'TANQUE DE PRESION',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            26 => array(
                'description' => 'MANOMETRO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '3',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            27 => array(
                'description' => 'PRESOSTATO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'ACMELER',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            28 => array(
                'description' => 'PRESOSTATO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'FURNAS',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            29 => array(
                'description' => 'TABLERO DE CONTROL ELECTRONICO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '2',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            30 => array(
                'description' => 'BOMBA 3HP',
                'type' => 'CLR-1.1/4/160',
                'model' => '3T',
                'brand' => 'BOMBAGUA',
                'quantity' => 1,
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            31 => array(
                'description' => 'BOMBA 25 HP',
                'type' => 'CL-1.1/2/250',
                'model' => '25',
                'brand' => 'BOMBAGUA',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            32 => array(
                'description' => 'FLUSOSTATO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            33 => array(
                'description' => 'TANQUE DE PRESION',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            34 => array(
                'description' => 'MANOMETRO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '3',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            35 => array(
                'description' => 'PRESOSTATO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'FURNAS',
                'quantity' => '2',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            36 => array(
                'description' => 'TABLERO DE CONTROL ELECTRONICO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '2',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            37 => array(
                'description' => 'BOMBA 3HP',
                'type' => 'A37535',
                'model' => ' ',
                'brand' => 'KSB BOMBAS',
                'quantity' => '2',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            38 => array(
                'description' => 'TANQUE DE PRESION',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            39 => array(
                'description' => 'MANOMETRO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            40 => array(
                'description' => 'PRESOSTATO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'FURNAS',
                'quantity' => '2',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            41 => array(
                'description' => 'TABLERO DE CONTROL ELECTRONICO',
                'type' => 'S',
                'model' => 'I',
                'brand' => 'S/I',
                'quantity' => '1',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            42 => array(
                'description' => 'Puente Grúa, capacidad: 2000Kg, luz: dimensiones máximas 14.5, Longitud máxima: 31 m, velocidad de elevación 7.2/2.4 m/min, motor de elevación 3.12/1.04 Kw a 1800/600 rpm, velocidad de traslación de puente 2x0.48/0.12 Kw a 3600/900 rpm, recorrido del gancho: recorrido máximo: 10 m',
                'type' => 'AG-20 H10 4',
                'model' => '1 modelo abus',
                'brand' => 'ABUS',
                'quantity' => '1',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        ));
    }
}
