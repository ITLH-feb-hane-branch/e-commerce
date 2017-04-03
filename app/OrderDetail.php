<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //declaring fillable coloumn names
    protected $fillable = ['action_date' , 'status' ,];
}
