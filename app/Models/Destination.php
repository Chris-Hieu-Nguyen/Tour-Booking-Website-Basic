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
    public function destination_translation(){
        return $this->hasMany('App\Models\DestinationTranslation','destination_id','id');
    }
    public function translation($language = null)
    {
        if ($language == null) {
            $language = app()->getLocale();
        }
        return $this->hasMany('App\Models\DestinationTranslation', 'destination_id', 'id')
        ->where('lang', '=', $language)->first();
    }
}
