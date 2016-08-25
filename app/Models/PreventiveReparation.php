<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreventiveReparation extends Model
{
    protected $table = 'preventives_reparations';

    protected $fillable = ['user_id','reparation','equipment_id','initial_date','initial_time',
        'ending_date','ending_time','system_id','sub_system_id'];

    public function user(){
        return $this->hasOne('App\User');
    }

    public function equipment(){
        return $this->hasOne('App\Models\Equipment');
    }

    public function system(){
        return $this->hasOne('App\Models\System');
    }

    public function subSystem(){
        return $this->hasOne('App\Models\SubSystem');
    }
}
