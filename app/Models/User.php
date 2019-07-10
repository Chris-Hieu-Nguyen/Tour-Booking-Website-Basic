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
    public function post()
    {
        return $this->hasMany('App\Models\Post', 'author', 'id');
    }
    public function bill()
    {
        return $this->hasMany('App\Models\Bill', 'user_id', 'id');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'user_id', 'id');
    }
}
