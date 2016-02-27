<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codification extends Model
{
    protected $table = 'codifications';

    protected $fillable = ['ubication','area','code','quantity','equipment_id','created_at','updated_at'];

    public function equipment(){
        return $this->belongsTo('App\Equipment');
    }
}
