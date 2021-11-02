<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = "categories";
    protected $fillable = ['id', 'name', 'desc'];
}
