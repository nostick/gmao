<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Equipment;
use Illuminate\Http\Request;

use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;

class ItemController extends Controller
{
    public function create()
    {
        $equipments = Equipment::all();
        return view('equipment.item.create')->with('equipments',$equipments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Item::$rules);

        $item = Item::create($request->all());

        return redirect()->route('equipment.index')->with('message', '<div class="alert alert-success" style="margin-top:300px">Componente de Inventario creado con Éxito</div>');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);

        return view('item.show')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = Item::find($id);
        $equipments = Equipment::all();

        return view('equipment.item.edit')
            ->with('item',$item)
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
        $item = Item::findOrFail($id);
        $data = $request->all();
        $this->validate($request, Item::$rules);

        $item->update($data);

        return redirect()
            ->route('equipment.index')
            ->with('message', '<div class="alert alert-success" style="margin-top:300px;margin-left:300px">Componente de Inventario editado con Éxito</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);

        $item->delete();


        return redirect()->route('equipment.index')->with('message', '<div class="alert alert-success" style="margin-top:150px">Mantenimiento eliminado con Éxito</div>');
    }

    public function excel($id){

        $equipment = Equipment::find($id);

        Excel::create('Mantenimientos', function($excel) use($equipment) {

            // Set the title
            $excel->setTitle('Componentes de Inventario');

            // Chain the setters
            $excel->setCreator('Maatwebsite')
                ->setCompany('Maatwebsite');

            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');

            $excel->sheet('Inventario', function($sheet) use($equipment) {


                $sheet->mergeCells('A1:E1');

                $sheet->setHeight(array(
                    1     =>  25,
                    3     =>  15
                ));

                $sheet->row(1,array('Tabla de Componentes de Inventario de '.$equipment->name));

                $sheet->setWidth(array(
                    'A'     =>  30,
                    'B'     =>  15,
                    'C'     =>  15,
                    'D'     =>  15,
                    'E'     =>  15,
                    'F'     =>  15
                ));

                $sheet->cells('B', function($cells) {

                    $cells->setAlignment('center');

                });

                $sheet->cells('A1', function($cells) {

                    $cells->setAlignment('center');

                });

                $sheet->cells('C', function($cells) {

                    $cells->setAlignment('center');

                });
                $sheet->cells('D', function($cells) {

                    $cells->setAlignment('center');

                });
                $sheet->cells('E', function($cells) {

                    $cells->setAlignment('center');

                });

                $sheet->cells('A3:E3', function($cells) {
                    $cells->setBackground('#880000');
                    $cells->setFontColor('#FFFFFF');

                });

                $sheet->row(2, array(
                    ' '
                ));

                $sheet->row(3,array(
                    'Descripción', 'Tipo','Modelo','Marca','Cantidad'
                ));

                $init = 4;
                foreach($equipment->item as $item){
                    $sheet->setHeight($init, 15);
                    $sheet->row($init,array(
                        $item->description,
                        $item->type,
                        $item->model,
                        $item->brand,
                        $item->quantity
                    ));
                    $init++;
                }



            });
        })->export('xls');
    }
}
