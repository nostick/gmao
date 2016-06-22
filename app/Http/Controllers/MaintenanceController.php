<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Maintenance;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class MaintenanceController extends Controller
{

    public function create()
    {
        $equipments = Equipment::all();
        return view('equipment.maintenance.create')->with('equipments',$equipments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Maintenance::$rules);


        if(!maintenance::find($request['activity'])) {
            $maintenance = Maintenance::create($request->all());


            return redirect()->route('equipment.index')->with('message', '<div class="alert alert-success" style="margin-top:300px">Mantenimiento creado con Éxito</div>');
        }else{
            return redirect()->route('equipment.maintenance.create')->with('message', '<div class="alert alert-danger" style="margin-left:300px">La actividad que desea agregar ya existe</div>');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maintenance = Maintenance::find($id);

        return view('maintenance.show')->with('maintenance',$maintenance);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $maintenance = Maintenance::find($id);
        $equipments = Equipment::all();

        return view('equipment.maintenance.edit')
            ->with('maintenance',$maintenance)
            ->with('equipments',$equipments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $maintenance = Maintenance::findOrFail($id);
        $data = $request->all();
        $this->validate($request, Maintenance::$rules2);

        $maintenance->update($data);

        return redirect()
            ->route('equipment.index')
            ->with('message', '<div class="alert alert-success" style="margin-top:300px;margin-left:300px">Mantenimiento editado con Éxito</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maintenance = Maintenance::find($id);

        $maintenance->delete();


        return redirect()->route('equipment.index')->with('message', '<div class="alert alert-success" style="margin-top:150px">Mantenimiento eliminado con Éxito</div>');
    }

    public function excel($id){
        $equipment = Equipment::find($id);

        Excel::create('Mantenimientos', function($excel) use($equipment) {

            // Set the title
            $excel->setTitle('Mantenimientos');

            // Chain the setters
            $excel->setCreator('Maatwebsite')
                ->setCompany('Maatwebsite');

            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');

            $excel->sheet('Mantenimientos', function($sheet) use($equipment) {


                $sheet->mergeCells('A1:C1');

                $sheet->setHeight(array(
                    1     =>  25,
                    3     =>  15
                ));

                $sheet->row(1,array('Tabla de Mantenimientos de '.$equipment->name));

                $sheet->setWidth(array(
                    'A'     =>  15,
                    'B'     =>  30,
                    'C'     =>  15
                ));

                $sheet->cells('A', function($cells) {

                    $cells->setAlignment('center');

                });

                $sheet->cells('A1', function($cells) {

                    $cells->setAlignment('center');

                });

                $sheet->cells('C', function($cells) {

                    $cells->setAlignment('center');

                });

                $sheet->cells('A3:C3', function($cells) {
                    $cells->setBackground('#880000');
                    $cells->setFontColor('#FFFFFF');

                });

                $sheet->row(2, array(
                    ' '
                ));

                $sheet->row(3,array(
                   'Actividad', 'Descripcion','Frecuencia'
                ));

                $init = 4;
                foreach($equipment->maintenance as $maintenance){
                    $sheet->setHeight($init, 15);
                    $sheet->row($init,array(
                       $maintenance->activity,
                       $maintenance->description,
                       $maintenance->frecuency
                    ));
                    $init++;
                }



            });
        })->export('xls');
    }
}
