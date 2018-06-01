<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $fillable = [
        'payment_id', 'traders_id', 'price', 'status'
    ];

    public function payment()
    {
        return $this->hasOne('App\User', 'id');
    }

    
}
