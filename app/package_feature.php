<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package_feature extends Model
{
    protected $table = 'package_feature';
    protected $fillable = ['id', 'name', 'package_id'];
}
