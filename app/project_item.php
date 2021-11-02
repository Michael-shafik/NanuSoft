<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project_item extends Model
{
    protected $table = 'project_item';

    protected $fillable = [
        'id', 'title', 'desc', 'image', 'old_project_id'
    ];
}
