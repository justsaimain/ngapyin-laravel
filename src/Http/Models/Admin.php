<?php

namespace Justsaimain\Ngapyin\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'ip',
        'user_agent',
        'profile'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
