<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'brief',
        'slug',
        'content',
        'photo',
        'author',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User','author','id');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'post_id', 'id');
    }
}
