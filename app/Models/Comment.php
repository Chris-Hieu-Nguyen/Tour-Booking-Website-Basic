<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'content',
        'tour_id',
        'post_id',
        'user_id',
    ];
    public function post()
    {
        return $this->belongsTo('App\Models\Post', 'post_id', 'id');
    }
    public function tour()
    {
        return $this->belongsTo('App\Models\Post', 'tour_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
