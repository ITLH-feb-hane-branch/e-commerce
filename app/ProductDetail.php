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
        'category_id',
        'model_id',
        'material_id',
        'name',
        'image_1',
        'image_2',
        'image_3',
        'description',
        'price',
        'quantity',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];

    public function material(){
        return $this -> hasMany(MaterialDetail :: class);
    }

    public function model(){
        return $this -> hasMany(ModelDetail :: class);
    }

    public function category(){
        return $this -> hasMany(categoryDetail :: class);
    }

}
