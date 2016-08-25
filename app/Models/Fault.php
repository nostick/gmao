<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fault extends Model
{
    protected $table = 'faults';

    protected $fillable = ['user_id','fault','equipment_id','fault_date','fault_time','system_id','sub_system_id'];

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
