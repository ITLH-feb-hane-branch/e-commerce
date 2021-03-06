<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialDetail extends Model
{
    protected $fillable = ['name','status','created_at','created_by','updated_at','updated_by'];

    public function product(){
      return $this -> belongsTo(ProductDetail :: class);
    }
}
