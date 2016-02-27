<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenances';

    protected $fillable = ['activity','description','frequency','equipment_id','created_at','updated_at'];

    public function equipment(){
        return $this->belongsTo('App\Equipment');
    }
}
