<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model
{
    protected $table = 'Contact_us';

    protected $fillable = [
        'id', 'phone', 'name', 'email',  'message',
    ];
}
