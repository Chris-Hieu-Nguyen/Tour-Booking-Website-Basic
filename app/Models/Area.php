<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $table = 'areas';
    public function category(){
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
}
