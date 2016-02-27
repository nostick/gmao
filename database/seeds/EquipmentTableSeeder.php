<?php

use Illuminate\Database\Seeder;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipments')->insert(array(
            0 => array(
                'name' => 'TUNEL DE LAVADO AUTOMÁTICO',
                'description' => 'El mantenimiento del Tunel de Lavado Automático comprende actividades a realizar a los cepillos, tuberías, dispensadores de champú, bombas del sistema, reductores de motores y tablero de control electrónico, todos ellos ubicados en el área de Lavado y Limpieza de Trolebuses. ',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            1 => array(
                'name' => 'SISTEMA DE AIRE COMPRIMIDO',
                'description' => 'El mantenimiento del sistema de aire comprimido está enfocado en su mayoría a los compresores de aire comprimido, filtros de admisión, separadores, de aspiración, fugas en accesorios, cambio de aceite, y chequeo de instrumentos. ',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            2 => array(
                'name' => 'MAQUINA DISPENSADORA DE DIESEL',
                'description' => 'La actividad comprende el mantenimiento preventivo a la maquina dispensadora de diesel que se encuentra ubicada en el área de llenado de combustible, limpieza externa y revisión de mangueras y tanque. ',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            3 => array(
                'name' => 'SISTEMA HIDRONEUMÁTICO',
                'description' => 'Las actividades a realizar son aquellas que evitan que el equipo falle por algún desperfecto que sea suscitado debido a falta de mantenimiento preventivo, estas actividades son aquellas aplicadas al equipo de control, instrumentos, bombas, compresor, tuberías, válvulas, sistema eléctrico y tanque de presión, limpieza inspección y verificación de los sistemas y corrección de averías según su aparición. ',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ),
            4 => array(
                'name' => 'PUENTE GRÚA',
                'description' => 'Las actividades a realizar son actividades de mantenimiento enfocadas a el puente grúa como equipo en general, comprobación, revisión eléctrica lubricación y comprobación de testeros, carros, control de diferentes elementos como ganchos, cables, poleas tambores para lograr un buen funcionamiento del puente grúa y llenar los formatos de control del mantenimiento. ',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        ));
    }
}
