<?php

namespace App\Http\Controllers;

use App\Equipment;
use App\Maintenance;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}
