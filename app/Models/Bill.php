<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = 'bills';
    protected $fillable = [
        'user_id',
        'email',
        'phone',
        'status',
        'created_at',
        'update_at',
    ];
    public function billDetail()
    {
        return $this->hasMany('App\Models\BillDetail','bill_id', 'id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
