<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $table = 'systems';

    protected $fillable = ['name','equipment_id','created_at','updated_at'];
    
    public function subSystem(){
        return $this->hasMany('App\Models\SubSystem');
    }


}
