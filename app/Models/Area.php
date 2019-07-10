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
    public function area_translation(){
        return $this->hasMany('App\Models\AreaTranslation','area_id','id');
    }
    public function translation($language = null)
    {
        if ($language == null) {
            $language = app()->getLocale();
        }
        return $this->hasMany('App\Models\AreaTranslation', 'area_id', 'id')
        ->where('lang', '=', $language)->first();
    }
    public function destination(){
        return $this->hasMany('App\Models\Destination','area_id','id');
    }
}
