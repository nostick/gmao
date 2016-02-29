<?php

namespace App\Http\Controllers;

use App\ContractService;
use App\Equipment;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContractServiceController extends Controller
{
    public function index(){
        $contracts = ContractService::all();
        return view('contract_services.index')->with('contracts',$contracts);
    }

    public function create()
    {
        $equipments = Equipment::all();
        return view('contract_services.create')->with('equipments',$equipments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, ContractService::$rules);

       $contract = ContractService::create($request->all());

        return redirect()->route('contract_services.index')->with('message', '<div class="alert alert-success" style="margin-top:300px">Contrato de Mantenimiento creado con Éxito</div>');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $item = Item::find($id);
//
//        return view('item.show')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $contract = ContractService::find($id);
        $equipments = Equipment::all();

        return view('contract_services.edit')
            ->with('contract',$contract)
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
        $contract = ContractService::findOrFail($id);
        $data = $request->all();
        $this->validate($request, ContractService::$rules);

        $contract->update($data);

        return redirect()
            ->route('contract_services.index')
            ->with('message', '<div class="alert alert-success" style="margin-top:300px;margin-left:300px;z-index: 9000">Componente de Inventario editado con Éxito</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contract = ContractService::find($id);

        $contract->delete();


        return redirect()->route('contract_services.index')->with('message', '<div class="alert alert-success" style="margin-top:150px">Mantenimiento eliminado con Éxito</div>');
    }

    public function excel($id){

        $contract = ContractService::all();

        Excel::create('Servicios de Contración', function($excel) use($contract) {

            // Set the title
            $excel->setTitle('Servicios de Contratación de Mantenimiento');

            // Chain the setters
            $excel->setCreator('Maatwebsite')
                ->setCompany('Maatwebsite');

            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');

            $excel->sheet('Inventario', function($sheet) use($contract) {


                $sheet->mergeCells('A1:H1');

                $sheet->setHeight(array(
                    1     =>  25,
                    3     =>  15
                ));

                $sheet->row(1,array('Tabla de Servicios de Contratación'));

                $sheet->setWidth(array(
                    'A'     =>  30,
                    'B'     =>  30,
                    'C'     =>  20,
                    'D'     =>  15,
                    'E'     =>  15,
                    'F'     =>  15,
                    'G'     =>  15,
                    'H'     =>  30,
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
                $sheet->cells('F', function($cells) {

                    $cells->setAlignment('center');

                });
                $sheet->cells('G', function($cells) {

                    $cells->setAlignment('center');

                });
                $sheet->cells('H', function($cells) {

                    $cells->setAlignment('center');

                });

                $sheet->cells('A3:H3', function($cells) {
                    $cells->setBackground('#880000');
                    $cells->setFontColor('#FFFFFF');

                });

                $sheet->row(2, array(
                    ' '
                ));

                $sheet->row(3,array(
                    'Equipo','Descripción', 'Tipo','Marca','Localización','Cantidad','Mantenimiento','Observaciones'
                ));

                $init = 4;
                foreach($contract as $contract){
                    $sheet->setHeight($init, 15);
                    $sheet->row($init,array(
                        $contract->equipment->name,
                        $contract->description,
                        $contract->type,
                        $contract->brand,
                        $contract->location,
                        $contract->quantity,
                        $contract->maintenance,
                        $contract->observation
                    ));
                    $init++;
                }



            });
        })->export('xls');
    }
}
