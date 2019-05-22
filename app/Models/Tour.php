<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    protected $table = 'tours';
    protected $fillable = [
        'slug',
        'destination_id',
        'avatar',
        'user_id',
        'price',
        'price_child',
        'max_people',
        'status',
        'rating',
        'start_day',
        'end_day',
        'created_at',
        'updated_at',
    ];
    public function destination(){
        return $this->belongsTo('App\Models\Destination');
    }
    public function tour_translation(){
        return $this->hasMany('App\Models\TourTranslation','tour_id','id');
    }
    public function translation($language = null)
    {
        if ($language == null) {
            $language = app()->getLocale();
        }
        return $this->hasMany('App\Models\TourTranslation', 'tour_id', 'id')
        ->where('lang', '=', $language)->first();
    }
}
