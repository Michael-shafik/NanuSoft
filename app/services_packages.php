<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services_packages extends Model
{
    protected $table = 'services_packages';
    protected $fillable = ['id', 'packages_id', 'service_item_id'];
}
