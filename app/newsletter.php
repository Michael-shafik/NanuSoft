<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    protected $table = 'newsletter';
    protected $fillable = [
        'id', 'phone',
    ];
}
