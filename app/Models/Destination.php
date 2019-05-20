<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    protected $table = 'destinations';
    public function area(){
        return $this->belongsTo('App\Models\Area','area_id','id');
    }
}
