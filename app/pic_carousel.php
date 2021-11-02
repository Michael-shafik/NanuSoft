<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pic_carousel extends Model
{
    protected    $table = 'pic_carousel';
    protected  $fillable = ['id', 'name', 'image'];
}
