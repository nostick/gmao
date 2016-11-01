<?php

namespace App\Http\Controllers;

use App\Models\CorrectiveReparation;
use App\Models\Equipment;
use App\Models\Fault;
use App\Models\Maintenance;
use App\Models\PreventiveReparation;
use App\Models\SubSystem;
use App\Models\System;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;

class RegisterController extends Controller
{
    public static $rulesCorrective = array(
        'user_id'       => 'required',
        'equipment_id'  => 'required',
        'date1'         => 'required',
        'time1'         => 'required',
        'system_id'     => 'required',
        'maintenance'   => 'required'
    );

    public static $rulesPreventive = array(
        'user_id'       => 'required',
        'equipment_id'  => 'required',
        'date1'         => 'required',
        'time1'         => 'required',
        'system_id'     => 'required',
        'maintenance_id'   => 'required'
    );

    public function __construct()
    {
        $this->middleware('web');
    }


    public function index(){
        return view('register.index')->with('state',false);
    }

    /* Modules Functions */

    public function RegisterCorrective(){
        $system = System::all();
        $subSystem = SubSystem::all();
        $equipments = Equipment::all();
        $users = User::all();

        return view('register.corrective')
            ->with('system',$system)
            ->with('subsystem',$subSystem)
            ->with('equipments',$equipments)
            ->with('users',$users);
    }

    public function StoreCorrective(Request $request){
        $this->validate($request, RegisterController::$rulesPreventive);

        $date1 = Carbon::parse($request['date1']);
       // $date2 = Carbon::parse($request['date2']);

        if($request['subsystem_id']) {

            $corrective = new CorrectiveReparation;
            $corrective->user_id          = $request['user_id'];
            $corrective->fault_id         = $request['maintenance_id'];
            $corrective->equipment_id     = $request['equipment_id'];
            $corrective->initial_date     = $date1;
            $corrective->initial_time     = $request['time1'];
            //$corrective->ending_date      = $date2;
            //$corrective->ending_time      = $request['time2'];
            $corrective->system_id        = $request['system_id'];
            $corrective->sub_system_id    = $request['subsystem_id'];
            $corrective->status           = false;
            $corrective->save();
        }else{
            $corrective = new CorrectiveReparation;
            $corrective->user_id          = $request['user_id'];
            $corrective->fault_id         = $request['maintenance_id'];
            $corrective->equipment_id     = $request['equipment_id'];
            $corrective->initial_date     = $date1;
            $corrective->initial_time     = $request['time1'];
            //$corrective->ending_date      = $date2;
            //$corrective->ending_time      = $request['time2'];
            $corrective->system_id        = $request['system_id'];
            $corrective->sub_system_id    = 28;
            $corrective->status           = false;
            $corrective->save();
        }
        return view('register.index')->with('state','corrective');
    }

    public function RegisterPreventive(){
        $system = System::all();
        $subSystem = SubSystem::all();
        $equipments = Equipment::all();
        $users = User::all();

        return view('register.preventive')
            ->with('system',$system)
            ->with('subsystem',$subSystem)
            ->with('equipments',$equipments)
            ->with('users',$users);
    }

    public function StorePreventive(Request $request){
        $this->validate($request, RegisterController::$rulesPreventive);

        $date1 = Carbon::parse($request['date1']);
        // $date2 = Carbon::parse($request['date2']);

        $maintenance = Maintenance::find($request['maintenance_id']);

        if($request['subsystem_id']) {

            $corrective = new PreventiveReparation;
            $corrective->user_id          = $request['user_id'];
            $corrective->reparation       = $maintenance->description;
            $corrective->equipment_id     = $request['equipment_id'];
            $corrective->initial_date     = $date1;
            $corrective->initial_time     = $request['time1'];
            //$corrective->ending_date      = $date2;
            //$corrective->ending_time      = $request['time2'];
            $corrective->system_id        = $request['system_id'];
            $corrective->sub_system_id    = $request['subsystem_id'];
            $corrective->status           = false;
            $corrective->save();
        }else{
            $corrective = new PreventiveReparation;
            $corrective->user_id          = $request['user_id'];
            $corrective->reparation       = $maintenance->description;
            $corrective->equipment_id     = $request['equipment_id'];
            $corrective->initial_date     = $date1;
            $corrective->initial_time     = $request['time1'];
            //$corrective->ending_date      = $date2;
            //$corrective->ending_time      = $request['time2'];
            $corrective->system_id        = $request['system_id'];
            $corrective->sub_system_id    = 28;
            $corrective->status           = false;
            $corrective->save();
        }
        return view('register.index')->with('state','preventive');
    }

    public function RegisterFaults(){
        $system = System::all();
        $subSystem = SubSystem::all();
        $equipments = Equipment::all();
        $users = User::all();

        return view('register.faults')
            ->with('system',$system)
            ->with('subsystem',$subSystem)
            ->with('equipments',$equipments)
            ->with('users',$users);
    }

    public function StoreFaults(Request $request){
        $this->validate($request, RegisterController::$rulesCorrective);

        $date1 = Carbon::parse($request['date1']);
        // $date2 = Carbon::parse($request['date2']);

        if($request['subsystem_id']) {

            $fault = new Fault;
            $fault->user_id               = $request['user_id'];
            $fault->fault                 = $request['maintenance'];
            $fault->equipment_id          = $request['equipment_id'];
            $fault->fault_date            = $date1;
            $fault->fault_time            = $request['time1'];
            //$corrective->ending_date    = $date2;
            //$corrective->ending_time    = $request['time2'];
            $fault->system_id             = $request['system_id'];
            $fault->sub_system_id         = $request['subsystem_id'];
            $fault->status                = false;
            $fault->save();
        }else{
            $fault = new Fault;
            $fault->user_id               = $request['user_id'];
            $fault->fault                 = $request['maintenance'];
            $fault->equipment_id          = $request['equipment_id'];
            $fault->fault_date            = $date1;
            $fault->fault_time            = $request['time1'];
            //$corrective->ending_date    = $date2;
            //$corrective->ending_time    = $request['time2'];
            $fault->system_id             = $request['system_id'];
            $fault->sub_system_id         = 28;
            $fault->status                = false;
            $fault->save();
        }
        return view('register.index')->with('state','fault');
    }

    public function RegisterFinish(){
        return view('register.finish');
    }

    public function ConfirmFinish(Request $request){
            if($request['type'] == 'preventive'){
                $preventive = PreventiveReparation::find($request['id']);

                $date1 = Carbon::parse($request['date1']);

                $preventive->ending_date   = $date1;
                $preventive->ending_time   = $request['time1'];
                $preventive->status        = true;
                $preventive->duration_days = $request['durationDay'];
                $preventive->duration_time = $request['durationTime'];
                $preventive->save();
            }else{
                $corrective = CorrectiveReparation::find($request['id']);

                $date1 = Carbon::parse($request['date1']);

                $corrective->ending_date   = $date1;
                $corrective->ending_time   = $request['time1'];
                $corrective->status        = true;
                $corrective->duration_days = $request['durationDay'];
                $corrective->duration_time = $request['durationTime'];
                $corrective->save();
            }

        return view('register.index')->with('state','ending');
    }

    /****************************/

    /*JavaScripts Ajax Functions*/

    public function changeSystem(Request $request){
        $equipment = Equipment::find($request['id']);
        $systems = $equipment->systems;
        return response()->json(['system'=>$systems, 'flag'=>'true']);
    }

    public function changeSubSystem(Request $request){
        $systems = System::find($request['id']);
        $subsystems = $systems->subSystem;
        if(!empty($subsystems)) {
            return response()->json(['subsystem' => $subsystems, 'flag' => 'true']);
        }else{
            return response()->json(['subsystem' => $subsystems, 'flag' => 'false']);
        }
    }

    public function searchBySystem(Request $request){
        $maintenance = Maintenance::where('system_id',$request['id'])->get();

        return response()->json($maintenance);
    }

    public function searchBySubSystem(Request $request){
        $maintenance = Maintenance::where('sub_system_id',$request['id'])->get();

        return response()->json($maintenance);
    }

    public function searchFaults(Request $request){

        if($request['type'] == 'system'){
            $faults = Fault::where('system_id',$request['id'])->get();
            return response()->json($faults);
        }else{
            $faults = Fault::where('sub_system_id',$request['id'])->get();
            return response()->json($faults);
        }

    }

    public function fillTable(Request $request){

        if($request['type'] == 'preventive'){
            $preventive = PreventiveReparation::with('system','subSystem')
                                            ->where('status',0)
                                            ->get();

            return response()->json($preventive);
        }else{
            $corrective = CorrectiveReparation::with('system','subSystem','fault')
                                                ->where('status',0)
                                                ->get();

            return response()->json($corrective);
        }
    }

    /*****************************/
}
