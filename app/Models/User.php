<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{

    protected $fillable = [
        'email', 'password','first_name', 'last_name'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
