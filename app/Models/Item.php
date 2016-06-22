<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = ['description','type','model','brand','quantity','equipment_id','created_at','updated_at'];

    public static $rules = array(
        'description' => 'required|min:3|max:255',
        'type' => 'required|min:3|max:255',
        'model' => 'required|min:3|max:255',
        'brand' => 'required|min:3|max:255',
        'quantity' => 'required|regex:/([0-9]{1,3})/'
    );

    public function equipment(){
        return $this->belongsTo('App\Models\Equipment');
    }

}
