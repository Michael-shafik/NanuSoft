<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected  $table = "products";
    protected  $fillable = [
        'id', 'name', 'desc', 'image',
    ];
}
