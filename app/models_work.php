<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class models_work extends Model
{
    protected $table = 'models_work';
    protected $fillable = ['id', 'image', 'video', 'service_item_id'];
}
