<?php

namespace App\Http\Controllers;

use App\Models\CorrectiveReparation;
use App\Models\Equipment;
use App\Models\Maintenance;
use App\Models\SubSystem;
use App\Models\System;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;

class RegisterController extends Controller
{
    public static $rules = array(
        'user_id'       => 'required',
        'equipment_id'  => 'required',
        'date1'         => 'required',
        'date2'         => 'required',
        'time1'         => 'required',
        'time2'         => 'required',
        'system_id'     => 'required',
        'maintenance_id'=> 'required'
    );

    public function __construct()
    {
        $this->middleware('web');
    }


    public function index(){
        return view('register.index');
    }

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
        $this->validate($request, RegisterController::$rules);

        $reparation = Maintenance::find($request['maintenance_id']);

        $date1 = Carbon::parse($request['date1']);
        $date2 = Carbon::parse($request['date2']);

        if($request['subsystem_id']) {

            $corrective = new CorrectiveReparation;
            $corrective->user_id          = $request['user_id'];
            $corrective->reparation       = $reparation->description;
            $corrective->equipment_id     = $request['equipment_id'];
            $corrective->initial_date     = $date1;
            $corrective->initial_time     = $request['time1'];
            $corrective->ending_date      = $date2;
            $corrective->ending_time      = $request['time2'];
            $corrective->system_id        = $request['system_id'];
            $corrective->sub_system_id    = $request['subsystem_id'];
            $corrective->save();
        }else{
            $corrective = new CorrectiveReparation;
            $corrective->user_id          = $request['user_id'];
            $corrective->reparation       = $reparation->description;
            $corrective->equipment_id     = $request['equipment_id'];
            $corrective->initial_date     = $date1;
            $corrective->initial_time     = $request['time1'];
            $corrective->ending_date      = $date2;
            $corrective->ending_time      = $request['time2'];
            $corrective->system_id        = $request['system_id'];
            $corrective->sub_system_id    = 28;
            $corrective->save();
        }
        return view('register.index')->with('message','Reparacion registrada satisfactoriamente');
    }

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
}
