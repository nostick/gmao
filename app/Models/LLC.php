<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LLC extends Model
{
    protected $table = 'llc';

    protected $fillable = ['condition',
        'slug',
        'mean',
        'value',
        'value_unit',
        'created_at',
        'updated_at'];
}
