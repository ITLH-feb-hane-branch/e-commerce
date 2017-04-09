<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [ 'role_id', 'first_name', 'last_name', 'email', 'password', 'status' , 'contact_no' ];
}
