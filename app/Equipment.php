<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';

    protected $fillable = ['name','description','created_at','updated_at'];

    public function codification(){
        return $this->hasOne('App\Codification');
    }

    public function maintenance()
    {
        return $this->hasMany('App\Maintenance');
    }

    public function item()
    {
        return $this->hasMany('App\Item');
    }
}
