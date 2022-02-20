<?php

namespace Swandam\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $guarded = ['id'];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
