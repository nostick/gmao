<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';

    protected $fillable = ['name','description','created_at','updated_at'];

    public function codification(){
        return $this->hasOne('App\Models\Codification');
    }

    public function maintenance()
    {
        return $this->hasMany('App\Models\Maintenance');
    }

    public function item()
    {
        return $this->hasMany('App\Models\Item');
    }

    public function systems(){
        return $this->hasMany('App\Models\System');
    }
}
