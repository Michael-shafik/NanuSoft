<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sys_contact_list extends Model
{
    protected $table = 'sys_contact_list';
    protected $fillable = [
        'id', 'pid', 'phone_number', 'phone_number', 'user_name', 'company', 'first_name', 'last_name'
    ];
}
