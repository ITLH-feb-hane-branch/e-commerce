<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model as Authenticatable;

class ProductDetail extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id','model_id','material_id','name','image_1','image_2','image_3','description','price','quantity','status'
    ];
}
