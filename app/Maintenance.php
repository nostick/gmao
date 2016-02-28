<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenances';

    protected $fillable = ['activity','description','frecuency','equipment_id','created_at','updated_at'];

    public static $rules = array(
        'activity' => 'required|regex:/([A-Z]{3})+(-)+([0-9]{1})+(.)([0-9]{1})/|unique:maintenances,activity',
        'description' => 'required',
        'frecuency' => 'required'
    );

    public static $rules2 = array(
        'activity' => 'required|regex:/([A-Z]{3})+(-)+([0-9]{1})+(.)([0-9]{1})/',
        'description' => 'required',
        'frecuency' => 'required'
    );

    public function equipment(){
        return $this->belongsTo('App\Equipment');
    }
}
