<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testmonials extends Model
{
    protected $table = 'testmonials';
    protected $fillable = [
        'id', 'comment', 'job', 'image', 'name',
    ];
}
