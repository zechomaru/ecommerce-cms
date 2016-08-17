<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Image extends Model

{

  public function products()
    {

        return $this->belongsToMany('App\Models\Product');
    }

    protected $fillable = ['url'];
// protected $attributes = [
//     'name' => 'default value'
//   ];
    protected $hidden = [];
}
