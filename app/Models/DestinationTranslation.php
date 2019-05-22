<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinationTranslation extends Model
{
    protected $table = 'destination_translations';
    public function destination() {
        return $this->belongsTo('App\Models\Destination');
    }
    
}
