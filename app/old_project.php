<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class old_project extends Model
{
    protected $table = 'old_project';

    protected $fillable = [
        'id', 'title', 'desc', 'image',
    ];
}
