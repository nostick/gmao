<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorrectiveReparation extends Model
{
    protected $table = 'correctives_reparations';

    protected $fillable = ['user_id','reparation','equipment_id','initial_date','initial_time',
        'ending_date','ending_time','system_id','sub_system_id'];

    public static $rules = array(
        'user_id' => 'required|min:3|max:255',
        'type' => 'required|min:3|max:255',
        'model' => 'required|min:3|max:255',
        'brand' => 'required|min:3|max:255',
        'quantity' => 'required|regex:/([0-9]{1,3})/'
    );

    public function user(){
        return $this->hasOne('App\User');
    }

    public function equipment(){
        return $this->hasOne('App\Models\Equipment');
    }

    public function system(){
        return $this->belongsTo('App\Models\System');
    }

    public function subSystem(){
        return $this->belongsTo('App\Models\SubSystem');
    }

    public function fault(){
        return $this->belongsTo('App\Models\Fault');
}
}
