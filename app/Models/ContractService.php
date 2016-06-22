<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractService extends Model
{
    protected $table = 'contract_services';

    protected $fillable = ['description','type','brand','location','quantity','maintenance','observation','equipment_id','created_at','updated_at'];

    public static $rules = array(
        'description' => 'required|min:3|max:255',
        'type' => 'required|min:3|max:255',
        'brand' => 'required|min:3|max:255',
        'location' => 'required|min:3|max:255',
        'quantity' => 'required|regex:/([0-9]{1,3})/',
        'maintenance' => 'required|min:3|max:255',
        'observation' => 'required|min:3|max:255',
    );

    public function equipment(){
        return $this->belongsTo('App\Models\Equipment');
    }
}
