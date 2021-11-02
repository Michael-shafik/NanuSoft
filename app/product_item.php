<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_item extends Model
{
    protected $table = "product_item";
    protected $fillable = [
        'id', 'name', 'desc', 'price', 'image', 'products_id', 'catageores_id',
    ];
}
