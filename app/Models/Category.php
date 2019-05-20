<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    public function category_trans(){
        return $this->hasMany('App\Models\CategoryTranslation','category_id','id');
    }
    public function translation($language = null)
    {
        if ($language == null) {
            $language = app()->getLocale();
        }
        return $this->hasMany('App\Models\CategoryTranslation', 'category_id', 'id')
        ->where('lang', '=', $language)->first();
    }
}
