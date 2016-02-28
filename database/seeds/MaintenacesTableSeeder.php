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
        DB::table('maintenances')->insert(array(
            0 => array(
                'activity' => 'TLA-1.0',
                'description' => 'BOMBA DE BAJA PRESION EN ACERO INOXIDABLE: HMAX 68M, Q= 5.7m³/h, PMAX= 16 bar, TMAX= 120ºC, N= 2900 1/MIN',
                'frecuency' => 'DIARIA',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            1 => array(
                'activity' => 'TLA-2.0',
                'description' => 'BOMBA DOSIFICADOR MAGNETICA DE MEMBRANA 4 BAR CON MOTOR ATB 400/230V, 1.95/3.35A, 0.75kW; 1420 rev/min; 50 Hz',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            2 => array(
                'activity' => 'TLA-3.0',
                'description' => 'BOMBA DE ALTA PRESIÓN DE PISTONES CERÁMICOS PMAX= 2000 PSI, 1725 RPM',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            3 => array(
                'activity' => 'TLA-3.1',
                'description' => 'MOTOR EN CEPILLOS',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            4 => array(
                'activity' => 'TLA-4.0',
                'description' => 'REDUCTORES',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            5 => array(
                'activity' => 'TLA-5.0',
                'description' => 'TABLERO DE CONTROL ELECTRONICO',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            6 => array(
                'activity' => 'TLA-6.0',
                'description' => 'CEPILLOS GIRATORIOS',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            7 => array(
                'activity' => 'TLA-7.0',
                'description' => 'TANQUE DE AGUA 750 L Y SENSORES',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            8 => array(
                'activity' => 'TLA-8.0',
                'description' => 'REVISIÓN Y AJUSTE DE BOMBA DE ALTA PRESIÓN',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            9 => array(
                'activity' => 'TLA-9.0',
                'description' => 'MANTENIMIENTO DE REDUCTORES',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            10 => array(
                'activity' => 'TLA-10.0',
                'description' => 'MANTENIMIENTO DEL TABLERO DE CONTROL ELECTRÓNICO',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            11 => array(
                'activity' => 'SAC-1.0 ',
                'description' => 'Limpieza general del sistema de aire comprimido',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            12 => array(
                'activity' => 'SAC-2.0',
                'description' => 'Revisión y limpieza de los filtros de admisión de aire',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            13 => array(
                'activity' => 'SAC-2.1',
                'description' => 'Sustitución de filtro separador',
                'frecuency' => 'ANUAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            14 => array(
                'activity' => 'SAC-2.2',
                'description' => 'Limpieza de filtros de aspiración',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            15 => array(
                'activity' => 'SAC-2.3',
                'description' => 'Comprobación y limpieza del filtro separador',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            16 => array(
                'activity' => 'SAC-3.0',
                'description' => 'Reapriete de tuercas y tornillos de la estructura',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            17 => array(
                'activity' => 'SAC-4.0',
                'description' => 'Inspección del estado de tornillos y cables desgastados',
                'frecuency' => 'ANUAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            18 => array(
                'activity' => 'SAC-5.0',
                'description' => 'Sustitución de la tubería de nylon y facores',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            19 => array(
                'activity' => 'SAC-5.1',
                'description' => 'Comprobación de la válvula de seguridad',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            20 => array(
                'activity' => 'SAC-5.2',
                'description' => 'Drenado de la humedad del tanque',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            21 => array(
                'activity' => 'SAC-6.0',
                'description' => 'Revisión de aceite del compresor y motor',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            22 => array(
                'activity' => 'SAC-7.0',
                'description' => 'Sustitución de latiguillos y mangueras hidráulicas',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            23 => array(
                'activity' => 'SAC-8.0',
                'description' => 'Revisión del estado del impeler y desgaste de grietas',
                'frecuency' => 'ANUAL',
                'equipment_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            24 => array(
                'activity' => 'MDD-1.0',
                'description' => 'Limpieza externa del surtidor',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            25 => array(
                'activity' => 'MDD-2.0',
                'description' => 'Revisión del tanque por existencia de agua',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            26 => array(
                'activity' => 'MDD-3.0',
                'description' => 'Varillaje de la vara de conexión',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            27 => array(
                'activity' => 'MDD-4.0',
                'description' => 'Limpieza del colador y la malla con aire comprimido',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            28 => array(
                'activity' => 'MDD-5.0',
                'description' => 'Limpieza del tanque',
                'frecuency' => 'ANUAL',
                'equipment_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            29 => array(
                'activity' => 'SHI-1.0',
                'description' => 'Mantenimiento del equipo de control (tablero)',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            30 => array(
                'activity' => 'SHI-2.0',
                'description' => 'Mantenimiento de los instrumentos de control',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            31 => array(
                'activity' => 'SHI-3.0',
                'description' => 'Mantenimiento de las bombas',
                'frecuency' => 'ANUAL',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            32 => array(
                'activity' => 'SHI-4.0',
                'description' => 'Mantenimiento de los compresores',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            33 => array(
                'activity' => 'SHI-5.0',
                'description' => 'Mantenimiento de tuberias',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            34 => array(
                'activity' => 'SHI-6.0',
                'description' => 'Mantenimiento de las válvulas e impelente',
                'frecuency' => 'ANUAL',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            35 => array(
                'activity' => 'SHI-7.0',
                'description' => 'Mantenimiento del sistema eléctrico ',
                'frecuency' => 'ANUAL',
                'equipment_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            36 => array(
                'activity' => 'PGR-1.0',
                'description' => 'Lubricación de la estructura',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            37 => array(
                'activity' => 'PGR-2.0',
                'description' => 'Comprobación y revisión general del puente grúa',
                'frecuency' => 'MENSUAL',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            38 => array(
                'activity' => 'PGR-3.0',
                'description' => 'Mantenimiento eléctrico general',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            39 => array(
                'activity' => 'PGR-4.0',
                'description' => 'Comprobación de testeros',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            40 => array(
                'activity' => 'PGR-4.1',
                'description' => 'Lubricación de testeros',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            41 => array(
                'activity' => 'PGR-4.2',
                'description' => 'Revisión de motores de testeros',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            42 => array(
                'activity' => 'PGR-5.0',
                'description' => 'Fijación de carros del puente grúa',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            43 => array(
                'activity' => 'PGR-5.1',
                'description' => 'Comprobación y lubricación de carros y elementos de freno',
                'frecuency' => 'SEMESTRAL',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            44 => array(
                'activity' => 'PGR-5.2',
                'description' => 'Comprobación de perdida de lubricación de carro',
                'frecuency' => 'TRIMESTRAL',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            45 => array(
                'activity' => 'PGR-6.0',
                'description' => 'Control de cables',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            46 => array(
                'activity' => 'PGR-7.0',
                'description' => 'Control de poleas',
                'frecuency' => 'ANUAL',
                'equipment_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        ));
    }
}
