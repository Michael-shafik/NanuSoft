<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service_item extends Model
{
    protected $table = "service_item";
    protected $fillable = [
        'id', 'title', 'desc', 'detal_title', 'detal_desc', 'price', 'image',
        // 'packages_id' => 'array',
    ];
    public function packages()
    {
        return $this->belongsToMany(packages::class, 'services_packages'); // assuming user_id and task_id as fk
    }
}
