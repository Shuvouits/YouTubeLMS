<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     protected $guarded = [];

      public function order(){
        return $this->hasMany(Order::class, 'payment_id', 'id');
    }
}
