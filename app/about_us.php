<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about_us extends Model
{
    protected $table = 'about_us';

    protected $fillable = [
        'id', 'first_title', 'first_desc', 'second_title',  'second_desc', 'third_title', 'third_desc', 'image', 'video'
    ];
}
