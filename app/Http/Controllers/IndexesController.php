<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\CorrectiveReparation;
use App\Models\Equipment;
use App\Models\Fault;
use App\Models\Maintenance;
use App\Models\PreventiveReparation;
use App\Models\SubSystem;
use App\Models\System;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexesController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('indexes.selection');
    }

    public function Corrective(){
        $system = System::all();
        $subSystem = SubSystem::all();
        $equipments = Equipment::all();
        $users = User::all();

        return view('indexes.corrective')
            ->with('system',$system)
            ->with('subsystem',$subSystem)
            ->with('equipments',$equipments)
            ->with('users',$users);
    }

    public function Preventive(){
        $system = System::all();
        $subSystem = SubSystem::all();
        $equipments = Equipment::all();
        $users = User::all();

        return view('indexes.index')
            ->with('system',$system)
            ->with('subsystem',$subSystem)
            ->with('equipments',$equipments)
            ->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Calculo para el caso de mantenimiento preventivo
     *
     * @param Request $request
     *
     */

    public function calculateIndexes(Request $request){
        $input = $request->all();

        //dd($input['selected-info']);

        $type = $input['selected-info'];

        switch ($type){
            case 1 :
                $this->calculateBySystem($input);
                break;
            case 2 :
                $view = $this->calculateBySubSystem($input);
                return view('indexes.show')->with('data',$view->getData());
                break;

            case 3 :
                $view = $this->calculateByMaintenance($input);
                return view('indexes.show')->with('data',$view->getData());
                break;
        }
    }

    public function calculateBySystem($data){
        $initialDate = Carbon::createFromFormat('d-m-Y', $data['date1']);

        $preventive = PreventiveReparation::where('equipment_id',$data['equipment_id'])
            ->where('system_id',$data['system_id'])
            ->where('status',1)
            ->orderBy('initial_date','asc')
            ->get();

        if(count($preventive)<1){
            return view('indexes.show')
                ->with('result',false);
        }

        $corrective = CorrectiveReparation::where('equipment_id',$data['equipment_id'])
            ->where('system_id',$data['system_id'])
            ->where('status',1)
            ->orderBy('initial_date','asc')
            ->get();

        if(count($corrective)<1){
            return view('indexes.show')
                ->with('result',false);
        }

        $n = 0;
        foreach($corrective as $c){
            $dt = Carbon::parse($c->initial_date);

            if($dt->gt($initialDate)){
                $n++;
            }
        }

        $correctiveToCalculate = CorrectiveReparation::where('equipment_id',$data['equipment_id'])
            ->where('system_id',$data['system_id'])
            ->where('status',1)
            ->orderBy('initial_date','asc')
            ->get();

        if(count($correctiveToCalculate)<1){
            return view('indexes.show')
                ->with('result',false);
        }

        $maintenance = Maintenance::where('equipment_id',$data['equipment_id'])
            ->where('system_id',$data['system_id'])
            ->get();

        $equipment = Equipment::find($data['equipment_id']);

        if(count($maintenance)<1){
            return view('indexes.show')
                ->with('result',false);
        }

        $arrayData = $this->joinData($preventive,$correctiveToCalculate);

        $TBF     = [];
        $MTBF    = [];
        $TO      = [];
        $HT      = [];
        $lamda   = [];
        $TTR     = [];
        $HMP     = [];
        $HMC     = [];
        $MTTR    = [];
        $miu     = [];
        $D       = [];
        $FF      = [];
        $FD      = [];
        $TA      = [];
        $type    = [];

        foreach($arrayData as $index => $d){
            $init = Carbon::parse($d->initial_date);
            $end  = Carbon::parse($d->ending_date);

            if($index == 0){
                $TBF[]   = $init->diffInDays($initialDate);
                $HT[]    = $TBF[$index] * 8;
                $MTBF[]  = $TBF[$index] / $n;
                $TTR[]   = $d->duration_days;
                $MTTR[]  = $TTR[$index] / $n;
                $lamda[] = 1 / $MTBF[$index];
                $miu[]   = 1 / $MTTR[$index];
                $TO[]    = $init->diffInDays($equipment->created_at);
                $TA[]    = $init->diffInDays($end);

                if($d->getTable() == "preventives_reparations"){
                    $HMP[]   = $d->duration_time;
                    $HMC[]   = 0;
                    $type[]  = 'preventive';
                }else{
                    $HMC[]   = $d->duration_time;
                    $HMP[]   = 0;
                    $type[]  = 'corrective';
                }

                $D[]          = $MTBF[$index] / ($MTBF[$index] + $MTTR[$index]);
                if(isset($HMP[$index])){
                    $FF[]         = ($HT[$index] - $HMP[$index]) / $HT[$index] ;
                }else{
                    $FF[]         = 0;
                }
                if(isset($HMP[$index])){
                    $FD[]    = ($HT[$index] - $HMP[$index]) / $HT[$index];
                }else{
                    $FD[]    = ($HT[$index] - $HMC[$index]) / $HT[$index];
                }

            }else{
                $refEnd = Carbon::parse($arrayData[$index-1]->ending_date);
                if($init->diffInDays($refEnd)> 0 ){
                    $TBF[]   = $init->diffInDays($refEnd);
                }else{
                    $TBF[]   = 1;
                }
dd($arrayData);
                $HT[]    = $TBF[$index]*8;
                $MTBF[]  = $TBF[$index]/$n;
                $TTR[]   = $d->duration_days;
                $MTTR[]  = $TTR[$index] / $n;
                $lamda[] = 1 / $MTBF[$index];
                $miu[]   = 1 / $MTTR[$index];
                $TO[]    = $init->diffInDays($equipment->created_at);
                $TA[]    = $init->diffInDays($end);
                $D[]     = $MTBF[$index] / ($MTBF[$index] + $MTTR[$index]);
                if($d->getTable() == "preventives_reparations"){
                    $HMP[]   = $d->duration_time;
                    $HMC[]   = 0;
                    $type[]  = 'preventive';
                }else{
                    $HMC[]   = $d->duration_time;
                    $HMP[]   = 0;
                    $type[]  = 'corrective';
                }
                if($HMP[$index] != 0){
                    $FF[]         = ($HT[$index] - $HMP[$index]) / $HT[$index];
                    $FD[]    = ($HT[$index] - $HMP[$index]) / $HT[$index];
                }else{
                    $FF[]         = 1;
                    $FD[]    = ($HT[$index] - $HMC[$index]) / $HT[$index];
                }
            }
        }
        return view('indexes.show')
            ->with('TBF',$TBF)->with('TTR',$TTR)->with('HT',$HT)
            ->with('HMC',$HMC)->with('HMP',$HMP)->with('TO',$TO)
            ->with('TA',$TA)->with('MTBF',$MTBF)->with('lamda',$lamda)
            ->with('MTTR',$MTTR)->with('miu',$miu)->with('D',$D)
            ->with('n',$n)
            ->with('FF',$FF)->with('FD',$FD)
            ->with('type',$type)
            ->with('all',$arrayData)
            ->with('maintenance',$maintenance);
    }

    public function calculateBySubSystem($data){
        $initialDate = Carbon::createFromFormat('d-m-Y', $data['date1']);

        $preventive = PreventiveReparation::where('equipment_id',$data['equipment_id'])
            ->where('system_id',$data['system_id'])
            ->where('sub_system_id',$data['subsystem_id'])
            ->where('status',1)
            ->orderBy('initial_date','asc')
            ->get();

        if(count($preventive)<1){
            return view('indexes.show')
                ->with('result',false);
        }

        $corrective = CorrectiveReparation::where('equipment_id',$data['equipment_id'])
                                            ->where('system_id',$data['system_id'])
                                            ->where('status',1)
                                            ->orderBy('initial_date','asc')
                                            ->get();

        if(count($corrective)<1){
            return view('indexes.show')
                ->with('result',false);
        }

        $n = 0;
        foreach($corrective as $c){
            $dt = Carbon::parse($c->initial_date);

            if($dt->gt($initialDate)){
                $n++;
            }
        }

        $correctiveToCalculate = CorrectiveReparation::where('equipment_id',$data['equipment_id'])
                                            ->where('system_id',$data['system_id'])
                                            ->where('sub_system_id',$data['subsystem_id'])
                                            ->where('status',1)
                                            ->orderBy('initial_date','asc')
                                            ->get();

        if(count($correctiveToCalculate)<1){
            return view('indexes.show')
                ->with('result',false);
        }

        $maintenance = Maintenance::where('equipment_id',$data['equipment_id'])
            ->where('system_id',$data['system_id'])
            ->where('sub_system_id',$data['subsystem_id'])
            ->get();

        $equipment = Equipment::find($data['equipment_id']);

        if(count($maintenance)<1){
            return view('indexes.show')
                ->with('result',false);
        }

        $arrayData = $this->joinData($preventive,$correctiveToCalculate);

        $TBF     = [];
        $MTBF    = [];
        $TO      = [];
        $HT      = [];
        $lamda   = [];
        $TTR     = [];
        $HMP     = [];
        $HMC     = [];
        $MTTR    = [];
        $miu     = [];
        $D       = [];
        $FF      = [];
        $FD      = [];
        $TA      = [];
        $type    = [];

        foreach($arrayData as $index => $d){
            $init = Carbon::parse($d->initial_date);
            $end  = Carbon::parse($d->ending_date);

            if($index == 0){
                $TBF[]   = $init->diffInDays($initialDate);
                $HT[]    = $TBF[$index] * 8;
                $MTBF[]  = $TBF[$index] / $n;
                $TTR[]   = $d->duration_days;
                $MTTR[]  = $TTR[$index] / $n;
                $lamda[] = 1 / $MTBF[$index];
                $miu[]   = 1 / $MTTR[$index];
                $TO[]    = $init->diffInDays($equipment->created_at);
                $TA[]    = $init->diffInDays($end);

                if($d->getTable() == "preventives_reparations"){
                    $HMP[]   = $d->duration_time;
                    $HMC[]   = 0;
                    $type[]  = 'preventive';
                }else{
                    $HMC[]   = $d->duration_time;
                    $HMP[]   = 0;
                    $type[]  = 'corrective';
                }

                $D[]          = $MTBF[$index] / ($MTBF[$index] + $MTTR[$index]);
                if(isset($HMP[$index])){
                    $FF[]         = ($HT[$index] - $HMP[$index]) / $HT[$index] ;
                }else{
                    $FF[]         = 0;
                }
                if(isset($HMP[$index])){
                    $FD[]    = ($HT[$index] - $HMP[$index]) / $HT[$index];
                }else{
                    $FD[]    = ($HT[$index] - $HMC[$index]) / $HT[$index];
                }

            }else{
                    $refEnd = Carbon::parse($arrayData[$index-1]->ending_date);
                if($init->diffInDays($refEnd)> 0 ){$TBF[]   = $init->diffInDays($refEnd);}else{$TBF[]   = 1;}
                    $HT[]    = $TBF[$index]*8;
                    $MTBF[]  = $TBF[$index]/$n;
                    $TTR[]   = $d->duration_days;
                    $MTTR[]  = $TTR[$index] / $n;
                    $lamda[] = 1 / $MTBF[$index];
                    $miu[]   = 1 / $MTTR[$index];
                    $TO[]    = $init->diffInDays($equipment->created_at);
                    $TA[]    = $init->diffInDays($end);
                    $D[]     = $MTBF[$index] / ($MTBF[$index] + $MTTR[$index]);
                if($d->getTable() == "preventives_reparations"){
                    $HMP[]   = $d->duration_time;
                    $HMC[]   = 0;
                    $type[]  = 'preventive';
                }else{
                    $HMC[]   = $d->duration_time;
                    $HMP[]   = 0;
                    $type[]  = 'corrective';
                }
                if($HMP[$index] != 0){
                    $FF[]         = ($HT[$index] - $HMP[$index]) / $HT[$index];
                    $FD[]    = ($HT[$index] - $HMP[$index]) / $HT[$index];
                }else{
                    $FF[]         = 1;
                    $FD[]    = ($HT[$index] - $HMC[$index]) / $HT[$index];
                }
            }
        }
        return view('indexes.show')
            ->with('TBF',$TBF)->with('TTR',$TTR)->with('HT',$HT)
            ->with('HMC',$HMC)->with('HMP',$HMP)->with('TO',$TO)
            ->with('TA',$TA)->with('MTBF',$MTBF)->with('lamda',$lamda)
            ->with('MTTR',$MTTR)->with('miu',$miu)->with('D',$D)
            ->with('n',$n)
            ->with('FF',$FF)->with('FD',$FD)
            ->with('type',$type)
            ->with('all',$arrayData)
            ->with('maintenance',$maintenance);

    }

    public function calculateByMaintenance($data){

        $initialDate = Carbon::createFromFormat('d-m-Y', $data['date1']);

        $preventive = PreventiveReparation::where('equipment_id',$data['equipment_id'])
                                            ->where('system_id',$data['system_id'])
                                            ->where('sub_system_id',$data['subsystem_id'])
                                            ->orderBy('initial_date','asc')
                                            ->get();

        if(count($preventive)<1){
            return view('indexes.show')
                ->with('result',false);
        }

        $corrective = CorrectiveReparation::where('equipment_id',$data['equipment_id'])
                                            ->where('system_id',$data['system_id'])
                                            ->orderBy('initial_date','asc')
                                            ->get();

        if(count($corrective)<1){
            return view('indexes.show')
                ->with('result',false);
        }

        $maintenance = Maintenance::where('equipment_id',$data['equipment_id'])
                                    ->where('system_id',$data['system_id'])
                                    ->where('sub_system_id',$data['subsystem_id'])
                                    ->get();

        if(count($maintenance)<1){
            return view('indexes.show')
                ->with('result',false);
        }

        $n = 0;
        foreach($corrective as $c){
            $dt = Carbon::parse($c->initial_date);

            if($n == 0){
                $TBF = $dt->diffInDays($initialDate);
                $HT = $TBF * 8;
                $TO = Carbon::now()->diffInDays($preventive[0]->equipment->created_at);
            }
            if($dt->gt($initialDate)){
                $n++;
            }
        }

        $MTBF    = $TBF / $n;
        $lamda   = 1 / $MTBF;
        $TTR     = [];
        $HMP     = [];
        $HMC     = 0;
        $MTTR    = [];
        $miu     = [];
        $D       = [];
        $FF      = [];
        $FD      = [];
        $TA      = [];
        foreach($preventive as $index => $p){
            $basicDate    = Carbon::parse($p->initial_date);
            $endingDate   = Carbon::parse($p->ending_date);
            $TA[]         = $endingDate->diffInDays($basicDate);
            $TTR[]        = $p->duration_days;
            $MTTR[]       = $p->duration_days / $n;
            $miu[]        = 1 / ($MTTR[$index]);
            $D[]          = $MTBF / ($MTBF + $MTTR[$index]);
            $HMP[]        = $p->duration_time;
            $FF[]         = ($HT - $p->duration_time) / $HT ;
            $FD[]         = ($HT - $p->duration_time)/  $HT;
        }

        return view('indexes.show')
            ->with('TBF',$TBF)->with('TTR',$TTR)->with('HT',$HT)
            ->with('HMC',$HMC)->with('HMP',$HMP)->with('TO',$TO)
            ->with('TA',$TA)->with('MTBF',$MTBF)->with('lamda',$lamda)
            ->with('MTTR',$MTTR)->with('miu',$miu)->with('D',$D)
            ->with('n',$n)
            ->with('FF',$FF)->with('FD',$FD)
            ->with('preventive',$preventive)
            ->with('maintenance',$maintenance);
    }

    public function joinData($preventive,$corrective){

        $data = $preventive->merge($corrective)->sortBy('initial_date',0,false);

        return $data;
    }

    /****************************/

    /*JavaScripts Ajax Functions*/

    public function searchBySystem(Request $request){
        $maintenance = Maintenance::where('system_id',$request['id'])->get();

        return response()->json($maintenance);
    }

    public function searchBySubSystem(Request $request){
        $maintenance = Maintenance::where('sub_system_id',$request['id'])->get();

        return response()->json($maintenance);
    }

    /*****************************/
}
