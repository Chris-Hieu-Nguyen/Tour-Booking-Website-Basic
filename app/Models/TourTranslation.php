<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourTranslation extends Model
{
    //
    protected $table = 'tour_translations';
    protected $fillable = [
        'tour_id',
        'lang',
        'title',
        'brief',
        'description',
        'created_at',
        'updated_at',
    ];
    public function tour()
    {
        return $this->belongsTo('App\Models\Tour');
    }
}
