<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EquipmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }


    public function index(){
        return view('equipment.index');
    }

    public function show($id){
        $equipment = Equipment::find($id);
        return view('equipment.detail')->with('equipment',$equipment);
    }

}
