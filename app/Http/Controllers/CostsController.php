<?php

namespace App\Http\Controllers;

use App\Models\CorrectiveReparation;
use App\Models\ElementCost;
use App\Models\LLC;
use App\Models\PreventiveReparation;
use App\Models\SubSystem;
use Illuminate\Http\Request;

use App\Http\Requests;

class CostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('costs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indicator = $request['indicator'];

        $CIM   = $this->calculateCIM();
        $CYO   = $this->calculateCYO();
        $CYM   = $this->calculateCYM($indicator);
        return view('costs.costs')
            ->with('CIM',$CIM)
            ->with('CYO',$CYO)
            ->with('CYM',$CYM);
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

    public function calculateCIM(){

        $CIMFS = 5000 * 2;
        $CIMFW = 40000;

        $SP = 0.01;
        $CIMSRU = 0;

        $elements = ElementCost::whereIn('level',['7','8','9','10'
            ,'11','12','13','14','15','16','17','18','19'])->get();

        foreach($elements as $e){
            if($e->cost != 0){
                $NSRU = ((2*$e->quantity)-((1-$SP)/$e->intensity));
                $CIMSRU = $CIMSRU + ($e->cost*$NSRU);
            }
        }
        foreach($elements as $e){
            if($e->cost != 0){
                $CIMSRU = $CIMSRU + ($e->cost*$NSRU);
            }
        }
        $CIM = $CIMFS + $CIMFW + $CIMSRU;

        $result = array('CIM'=>$CIM,
            'CIMFS' => $CIMFS,
            'CIMFW' => $CIMFW,
            'CIMSRU'=> $CIMSRU);

        return $result;
    }

    public function calculateCYO(){
        $CSD = 5000;
        $SP = 0.01;
        $MLD = 0;

        $elements = ElementCost::whereIn('level',['7','8','9','10'
            ,'11','12','13','14','15','16','17','18','19'])->get();
        $TAT      = LLC::where('slug','TAT')->first();

        foreach($elements as $e){
            if($e->cost != 0){
                $NSRU = ((2*$e->quantity)-((1-$SP)/$e->intensity));
                $MWT = $SP * ($TAT->value/($NSRU+1));
                $MLD = $MLD + (($e->intensity*$MWT)/$e->intensity);
            }
        }

        $MRT = LLC::where('slug','MRT')->first();
        $MTD = LLC::where('slug','MTD')->first();
        $MAD = LLC::where('slug','MAD')->first();

        $MTTR = $MLD + $MRT->value + $MTD->value + $MAD->value;
        $miu  = 1/$MTTR;
        $correctiveMaintenances = CorrectiveReparation::all();
        $hours = 0;
        foreach($correctiveMaintenances as $cm){
            $hours = $hours + $cm->duration_time;
        }

        $sumA = 0;
        foreach($elements as $e){
            if($e->cost != 0){
                $A = $miu / ($miu+$e->intensity);
                $sumA = $sumA + (60*(1-$A));
            }
        }

        $MADTCS = $hours * $sumA;
        $CYOU = (5*($MADTCS)*($CSD/1000))/10;

        return $CYOU;
    }

    public function calculateCYM($value){
        /*CYM = CYMP + CYMC*/
        $MCMP = 3;
        $CPH  = 15;
        $CYMP = 0;

        $elements = ElementCost::whereIn('level',['7','8','9','10'
            ,'11','12','13','14','15','16','17','18','19'])->get();
        $hours = 0;
        foreach($elements as $e){
            $name = strtoupper($e->name);

            $subSystem = SubSystem::where('name','like','%'.$name.'%')->first();
            if(!empty($subSystem)){
                $preventive = PreventiveReparation::where('sub_system_id',$subSystem->id)->get();

                if(!empty($preventive)){
                   foreach($preventive as $prev){
                       if($prev->status == 1){
                            $hours = $hours + $prev->duration_time;
                       }
                   }
                }
                $hours  = $hours * 10;
                $CYMPRU = ($MCMP/$CPH)*($value)*($e->cost)+$hours;
                $CYMP   = $CYMP + ($e->cost+ $CYMPRU);
                $hours  = 0;
            }

        }

        $CYCMS = 0;
        $CYMCW = 0;

        $NCMA = LLC::where('slug','NCMA')->first();
        $MRT = LLC::where('slug','MRT')->first();
        $MTD = LLC::where('slug','MTD')->first();
        $MAD = LLC::where('slug','MAD')->first();

        $MPH = $MRT->value + $MTD->value + (2*($MAD->value+1));

        foreach($elements as $e){
            $CYCMS = $CYCMS + ($NCMA->value*$MPH*$CPH+($NCMA->value*$e->cost));
        }

        $MCH = 0;
        foreach($elements as $e){
            $name = strtoupper($e->name);

            $subSystem = SubSystem::where('name','like','%'.$name.'%')->first();
            if(!empty($subSystem)) {
                $corrective = CorrectiveReparation::where('sub_system_id', $subSystem->id)->get();
                if(!empty($corrective)){
                    foreach($corrective as $prev){
                        if($prev->status == 1){
                            $MCH = $MCH + $prev->duration_time;
                        }
                    }
                }
            }
        }

        foreach($elements as $e){
            $CYMCW = $CYMCW + ($NCMA->value*$MCH*$CPH+($NCMA->value+$e->cost));
        }

        $CYMC = $CYMCW + $CYCMS;
        $CYMC = $CYMC / 10;
        $CYM = $CYMP + $CYMC;
        $result = array(
            'CYM'  => $CYM,
            'CYMP' => $CYMP,
            'CYMC' => $CYMC);
        return $result;
    }
}
