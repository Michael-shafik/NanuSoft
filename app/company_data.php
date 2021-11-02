<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company_data extends Model
{
    protected $table = 'company_data';
    protected $fillable = [
        'id', 'logo', 'phone', 'email', 'address', 'latitude', 'longitude'
    ];
}
