<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //
    protected $table = 'bill_details';
    public function tour(){
        return $this->belongsTo('App\Models\Tour');
    }
    public function bill(){
        return $this->belongsTo('App\Models\Bill');
    }
}
