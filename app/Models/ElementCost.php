<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementCost extends Model
{
    protected $table = 'cost_elements';

    protected $fillable = ['level',
        'name',
        'slug',
        'required',
        'quantity',
        'created_at',
        'updated_at'];

}
