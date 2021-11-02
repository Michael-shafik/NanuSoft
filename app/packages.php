<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class packages extends Model
{
    protected $table = 'packages';
    protected $fillable = ['id', 'name', 'price'];
    public function services()
    {
        return $this->belongsToMany(service_item::class, 'services_packages');
    }
}
