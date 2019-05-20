<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    //
    protected $table = 'category_translations';
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
