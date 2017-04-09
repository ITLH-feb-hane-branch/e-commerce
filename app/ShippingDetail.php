<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingDetail extends Model
{
    public function order(){
      return $this -> hasMany(OrderDetail::class);
    }
}
