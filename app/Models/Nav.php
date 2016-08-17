<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{

  public function categories()
      {
          return $this->belongsToMany('App\Models\Category');
      }
    protected $fillable = ['name', 'status'];

    protected $hidden = [];
}
