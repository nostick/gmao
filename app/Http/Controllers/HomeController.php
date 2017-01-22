<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Maintenance;
use App\Models\PreventiveReparation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preventive = PreventiveReparation::orderBy('sub_system_id','asc')->get();
        $lastest = array();
        $sub     = 0;
        foreach($preventive as $index => $prev){

            if($sub == 0 || ($sub != $prev->sub_system_id && $prev->sub_system_id > $sub)){
                $lastest[] = PreventiveReparation::where('sub_system_id',$prev->sub_system_id)
                                                ->orderBy('ending_date','desc')
                                                ->first();
                $sub = $prev->sub_system_id;
            }
        }

        $maintenances = array();
        foreach($lastest as $last){
            $maintenances[] = Maintenance::where('system_id',$last->system_id)
                                         ->where('sub_system_id',$last->sub_system_id)
                                         ->where('description',$last->reparation)
                                         ->first();
        }

        /*Calculo de Alarmas*/
        $alarms = array();
        $differences = array();
        $today = Carbon::now();
        foreach($maintenances as $index => $maintenance){
            $frecuency = $maintenance->frecuency;
            $date = Carbon::createFromFormat('Y-m-d', $lastest[$index]->ending_date);
            $diff = $today->diffInDays($date);
            $differences[] = $diff;
            switch ($frecuency){
                case 'ANUAL' : if($diff >= 363){
                                    $alarms[] = $lastest[$index];
                                }
                                break;
                case 'BIANUAL' : if($diff >= 726){
                    $alarms[] = $lastest[$index];
                }
                    break;
                case 'BIMENSUAL' : if($diff >= 56){
                    $alarms[] = $lastest[$index];
                }
                    break;
                case 'DIARIA' : if($diff == 1){
                    $alarms[] = $lastest[$index];
                }
                    break;
                case 'MENSUAL' : if($diff >= 28){
                    $alarms[] = $lastest[$index];
                }
                    break;
                case 'SEMANAL' : if($diff >= 5){
                    $alarms[] = $lastest[$index];
                }
                    break;
                case 'SEMESTRAL' : if($diff >= 168){
                    $alarms[] = $lastest[$index];
                }
                    break;
                case 'TRIMESTRAL' : if($diff >= 84){
                    $alarms[] = $lastest[$index];
                }
                    break;
            }

        }
        /*Fin de Calculo de Alarmas*/

        return view('home')
                 ->with('alarms',$alarms)
                 ->with('diff',$differences)
                 ->with('maintenances',$maintenances)   ;
    }
}
