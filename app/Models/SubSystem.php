<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubSystem extends Model
{
    protected $table = 'sub_systems';

    protected $fillable = ['name','system_id','created_at','updated_at'];

    public function system(){
        return $this->belongsTo('App\Models\System');
    }

    public function maintenances(){
        return $this->hasMany('App\Models\Maintenance');
    }
}
