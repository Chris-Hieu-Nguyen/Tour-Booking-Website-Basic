<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaTranslation extends Model
{
    //
    protected $table = 'area_translations';
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }
}
