<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service_benfits extends Model
{
    protected $table = 'service_benfits';
    protected $fillable = ['id', 'name', 'service_item_id'];
}
