<?php

use Illuminate\Database\Seeder;

class MaintenacesTableSeeder extends Seeder
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
            DB::table('maintenances')->truncate();

        DB::table('maintenances')->insert(array(
            0 => array(
                'activity' => 'TLA-1.0',
                'description' => 'REVISIÓN Y AJUSTE DE CEPILLOS GIRATORIOS',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'system_id' => 1,
                'sub_system_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            1 => array(
                'activity' => 'TLA-2.0',
                'description' => 'REVISIÓN, AJUSTE Y LUBRICACIÓN DEL MOTOR DE LOS CEPILLOS',
                'frecuency' => 'BIMENSUAL',
                'equipment_id' => 1,
                'system_id' => 1,
                'sub_system_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            2 => array(
                'activity' => 'TLA-3.0',
                'description' => 'MANTENIMIENTO DEL TABLERO DE CONTROL ELECTRÓNICO',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'system_id' => 2,
                'sub_system_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            3 => array(
                'activity' => 'TLA-4.0',
                'description' => 'REVISIÓN Y AJUSTE DE LA MEMBRANA DEL SISTEMA DISPENSADOR DE CHAMPU',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'system_id' => 3,
                'sub_system_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            4 => array(
                'activity' => 'TLA-5.0',
                'description' => 'REVISIÓN Y LUBRICACIÓN DE RODAMIENTOS DEL SISTEMA DISPENSADOR DE CHAMPU',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'system_id' => 3,
                'sub_system_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            5 => array(
                'activity' => 'TLA-6.0',
                'description' => 'REVISIÓN Y AJUSTE DE BOMBA DE BAJA PRESIÓN',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'system_id' => 4,
                'sub_system_id' => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            6 => array(
                'activity' => 'TLA-7.0',
                'description' => 'REVISIÓN Y AJUSTE DE BOMBA DOSIFICADORA',
                'frecuency' => 'BIMENSUAL',
                'equipment_id' => 1,
                'system_id' => 4,
                'sub_system_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            7 => array(
                'activity' => 'TLA-8.0',
                'description' => 'REVISIÓN Y AJUSTE DE BOMBA DE ALTA PRESIÓN',
                'frecuency' => 'BIMENSUAL',
                'equipment_id' => 1,
                'system_id' => 4,
                'sub_system_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            8 => array(
                'activity' => 'TLA-9.0',
                'description' => 'CHEQUEO DE TUBERÍAS Y FUGAS EN EL SISTEMA HIDRÁULICO',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'system_id' => 4,
                'sub_system_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            9 => array(
                'activity' => 'SAC-1.0',
                'description' => 'REVISIÓN DE RODAMIENTOS',
                'frecuency' => 'BIANUAL',
                'equipment_id' => 2,
                'system_id' => 5,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            10 => array(
                'activity' => 'SAC-2.0',
                'description' => 'REVISIÓN DE ACEITE DEL COMPRESOR Y MOTOR',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 2,
                'system_id' => 5,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            11 => array(
                'activity' => 'SAC-3.0',
                'description' => 'REAPRIETE DE TUERCAS Y TORNILLOS DE LA ESTRUCTURA',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 2,
                'system_id' => 5,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            12 => array(
                'activity' => 'SAC-4.0',
                'description' => 'REVISIÓN Y LIMPIEZA DE LOS FILTROS DE ADMISIÓN DE AIRE',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 2,
                'system_id' => 6,
                'sub_system_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            13 => array(
                'activity' => 'SAC-5.0',
                'description' => 'REVISIÓN DE FUGAS DE AIRE DE LOS ACCESORIOS, CONEXIONES Y JUNTAS DE ESTANQUEIDAD',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 2,
                'system_id' => 6,
                'sub_system_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            14 => array(
                'activity' => 'SAC-6.0',
                'description' => 'INSPECCIÓN DEL ESTADO DE TORNILLOS Y CABLES DESGASTADOS',
                'frecuency' => 'ANUAL',
                'equipment_id' => 2,
                'system_id' => 6,
                'sub_system_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            15 => array(
                'activity' => 'SAC-6.0',
                'description' => 'LIMPIEZA DE FILTROS DE ASPIRACIÓN',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 2,
                'system_id' => 6,
                'sub_system_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            16 => array(
                'activity' => 'SAC-7.0',
                'description' => 'INSPECCIÓN DEL ESTADO DE TORNILLOS Y CABLES DESGASTADOS',
                'frecuency' => 'ANUAL',
                'equipment_id' => 2,
                'system_id' => 6,
                'sub_system_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            17 => array(
                'activity' => 'SAC-8.0',
                'description' => 'BOMBA DE BAJA PRESION EN ACERO INOXIDABLE: HMAX 68M, Q= 5.7m³/h, PMAX= 16 bar, TMAX= 120ºC, N= 2900 1/MIN',
                'frecuency' => 'DIARIA',
                'equipment_id' => 1,
                'system_id' => 1,
                'sub_system_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            18 => array(
                'activity' => 'SAC-9.0',
                'description' => 'COMPROBACIÓN Y LIMPIEZA DE FILTRO SEPARADOR	',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 2,
                'system_id' => 6,
                'sub_system_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            19 => array(
                'activity' => 'SAC-10.0',
                'description' => 'SUSTITUCIÓN DE FILTRO SEPARADOR',
                'frecuency' => 'ANUAL',
                'equipment_id' => 2,
                'system_id' => 6,
                'sub_system_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            20 => array(
                'activity' => 'SAC-11.0',
                'description' => 'INSPECCIÓN DEL ESTADO DE TORNILLOS Y CABLES DESGASTADOS',
                'frecuency' => 'ANUAL',
                'equipment_id' => 2,
                'system_id' => 6,
                'sub_system_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            21 => array(
                'activity' => 'SAC-12.0',
                'description' => 'SUSTITUCIÓN DE LATIGUILLOS Y MANGUERAS HIDRÁULICAS',
                'frecuency' => 'BIANUAL',
                'equipment_id' => 2,
                'system_id' => 7,
                'sub_system_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            22 => array(
                'activity' => 'SAC-13.0',
                'description' => 'DRENADO DE LA HUMEDAD DEL TANQUE',
                'frecuency' => 'SEMANAL',
                'equipment_id' => 2,
                'system_id' => 8,
                'sub_system_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            23 => array(
                'activity' => 'SAC-14.0',
                'description' => 'COMPROBACIÓN DE LA VÁLVULA DE SEGURIDAD',
                'frecuency' => 'BIANUAL',
                'equipment_id' => 2,
                'system_id' => 8,
                'sub_system_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            24 => array(
                'activity' => 'MDD-1.0',
                'description' => 'MANTENIMIENTO DEL TABLERO DE CONTROL ELECTRÓNICO',
                'frecuency' => 'DIARIA',
                'equipment_id' => 3,
                'system_id' => 9,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            25 => array(
                'activity' => 'MDD-2.0',
                'description' => 'REVISIÓN DE VARILLAJE DE LA VARA DE CONEXIÓN ',
                'frecuency' => 'ANUAL',
                'equipment_id' => 3,
                'system_id' => 10,
                'sub_system_id' => 15,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            26 => array(
                'activity' => 'MDD-3.0',
                'description' => 'REVISIÓN Y AJUSTE DE ELEMENTOS ROSCADOS DE BOQUILLAS SURTIDORAS',
                'frecuency' => 'ANUAL',
                'equipment_id' => 3,
                'system_id' => 10,
                'sub_system_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            27 => array(
                'activity' => 'MDD-4.0',
                'description' => 'LIMPIEZA DEL COLADOR CON AIRE COMPRIMIDO',
                'frecuency' => 'ANUAL',
                'equipment_id' => 3,
                'system_id' => 11,
                'sub_system_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            28 => array(
                'activity' => 'MDD-5.0',
                'description' => 'LIMPIEZA DE LA MALLA CON AIRE COMPRIMIDO',
                'frecuency' => 'ANUAL',
                'equipment_id' => 3,
                'system_id' => 11,
                'sub_system_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            29 => array(
                'activity' => 'MDD-6.0',
                'description' => 'REVISIÓN DEL TANQUE POR EXISTENCIA DE AGUA',
                'frecuency' => 'ANUAL',
                'equipment_id' => 3,
                'system_id' => 12,
                'sub_system_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            30 => array(
                'activity' => 'MDD-7.0',
                'description' => 'LIMPIEZA DE TANQUE',
                'frecuency' => 'ANUAL',
                'equipment_id' => 3,
                'system_id' => 12,
                'sub_system_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            31 => array(
                'activity' => 'MDD-8.0',
                'description' => 'REVISIÓN Y AJUSTE DE BOMBA DE BAJA PRESIÓN',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 3,
                'system_id' => 13,
                'sub_system_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            32 => array(
                'activity' => 'MDD-9.0',
                'description' => 'REVISIÓN DE FUGAS DE AIRE DE LOS ACCESORIOS, CONEXIONES Y JUNTAS DE ESTANQUEIDAD',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 3,
                'system_id' => 14,
                'sub_system_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            33 => array(
                'activity' => 'SHI-1.0',
                'description' => 'REVISIÓN Y REAPRIETE DE LOS TERMINALES DE CONEXIÓN',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 4,
                'system_id' => 15,
                'sub_system_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            34 => array(
                'activity' => 'SHI-2.0',
                'description' => 'REVISION DE FUNCIONAMIENTO Y REAJUSTE DE CONTACTORES, CABLES DE CONEXIÓN DE LOS RELES Y SOLENOIDES',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 4,
                'system_id' => 15,
                'sub_system_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            35 => array(
                'activity' => 'SHI-3.0',
                'description' => 'REVISION DE FIJACION Y REAPRIETE DE LA MISMA EN LAS BOMBAS',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 4,
                'system_id' => 16,
                'sub_system_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            36 => array(
                'activity' => 'SHI-4.0',
                'description' => 'REVISIÓN Y AJUSTE DE BOMBAS',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 4,
                'system_id' => 16,
                'sub_system_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            37 => array(
                'activity' => 'SHI-5.0',
                'description' => 'DRENADO DE IMPUREZAS DEL TANQUE',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 4,
                'system_id' => 17,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            38 => array(
                'activity' => 'SHI-6.0',
                'description' => 'REVISIÓN DE ACEITE DEL COMPRESOR Y MOTOR',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 4,
                'system_id' => 18,
                'sub_system_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            39 => array(
                'activity' => 'SHI-7.0',
                'description' => 'REVISIÓN DE AJUSTE DE CORREAS DEL SISTEMA',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 4,
                'system_id' => 18,
                'sub_system_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            40 => array(
                'activity' => 'SHI-8.0',
                'description' => 'CHEQUEO DE TUBERÍAS Y FUGAS EN EL SISTEMA HIDRÁULICO',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 4,
                'system_id' => 19,
                'sub_system_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            41 => array(
                'activity' => 'SHI-9.0',
                'description' => 'REVISIÓN Y AJUSTE DE UNIONES Y VALVULAS',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 4,
                'system_id' => 19,
                'sub_system_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            42 => array(
                'activity' => 'SHI-10.0',
                'description' => 'REVISION Y AJUSTE DE SELLOS MECANICOS',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 4,
                'system_id' => 20,
                'sub_system_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            43 => array(
                'activity' => 'SHI-11.0',
                'description' => 'REVISION Y AJUSTE DE SELLOS MECANICOS',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 4,
                'system_id' => 20,
                'sub_system_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            44 => array(
                'activity' => 'SHI-12.0',
                'description' => 'REVISION DE FUNCIONAMIENTO DE BOBINAS',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 4,
                'system_id' => 21,
                'sub_system_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            45 => array(
                'activity' => 'SHI-13.0',
                'description' => 'REVISION Y AJUSTE DE PRESOSTATOS ',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 4,
                'system_id' => 22,
                'sub_system_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            46 => array(
                'activity' => 'SHI-14.0',
                'description' => 'REVISION Y AJUSTE DE PRESOSTATOS Y MANOMETROS',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 4,
                'system_id' => 22,
                'sub_system_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            47 => array(
                'activity' => 'PGR-1.0',
                'description' => 'VERIFICACIÓN DE GIRO DE GANCHOS',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 5,
                'system_id' => 23,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            48 => array(
                'activity' => 'PGR-2.0',
                'description' => 'LUBRICACIÓN Y REVISIÓN DE DESGASTE DE GANCHOS',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 5,
                'system_id' => 23,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            49 => array(
                'activity' => 'PGR-3.0',
                'description' => 'REVISIÓN Y CONTROL DEL FRENO DE IZAJE',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 5,
                'system_id' => 23,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            50 => array(
                'activity' => 'PGR-4.0',
                'description' => 'ESTRUCTURA (LUBRICACIÓN)',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'system_id' => 24,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            51 => array(
                'activity' => 'PGR-5.0',
                'description' => 'COMPROBACIÓN DE PERDIDA DE LUBRICACIÓN DE CARRO',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 5,
                'system_id' => 24,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            52 => array(
                'activity' => 'PGR-6.0',
                'description' => 'COMPROBACIÓN Y LUBRICACIÓN DE CARROS Y ELEMENTOS DE FRENO',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 5,
                'system_id' => 24,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            53 => array(
                'activity' => 'PGR-7.0',
                'description' => 'FIJACIÓN DE CARROS DE PUENTE GRÚA',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'system_id' => 24,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            54 => array(
                'activity' => 'PGR-8.0',
                'description' => 'CONTROL DE POLEAS',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'system_id' => 24,
                'sub_system_id' => '',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            55 => array(
                'activity' => 'PGR-9.0',
                'description' => 'REVISIÓN Y AJUSTE DE TAMBORES',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'system_id' => 25,
                'sub_system_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            56 => array(
                'activity' => 'PGR-10.0',
                'description' => 'REVISIÓN Y AJUSTE DE RODILLOS DE APOYO',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'system_id' => 25,
                'sub_system_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            57 => array(
                'activity' => 'PGR-11.0',
                'description' => 'CONTROL Y SUSTITUCION DE CABLES',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'system_id' => 25,
                'sub_system_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            58 => array(
                'activity' => 'PGR-12.0',
                'description' => 'MANTENIMIENTO ELÉCTRICO GENERAL',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 5,
                'system_id' => 26,
                'sub_system_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            59 => array(
                'activity' => 'PGR-13.0',
                'description' => 'REVISIÓN DE MOTORES DEL TESTEROS',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 5,
                'system_id' => 27,
                'sub_system_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            60 => array(
                'activity' => 'PGR-14.0',
                'description' => 'COMPROBACIÓN DE TESTEROS',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'system_id' => 27,
                'sub_system_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            61 => array(
                'activity' => 'PGR-15.0',
                'description' => 'LUBRICACIÓN DE TESTEROS',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'system_id' => 27,
                'sub_system_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        ));

        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
