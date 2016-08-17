<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Product extends Model

{
    public function category()
     {
         return $this->belongsTo('App\Models\Category');
     }

   public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

  public function images()
    {

        return $this->belongsToMany('App\Models\Image');
    }

    protected $fillable = ['name', 'sku', 'description', 'price', 'category_id', 'brand_id'];
// protected $attributes = [
//     'name' => 'default value'
//   ];
    protected $hidden = [];
}
