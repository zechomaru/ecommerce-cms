<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  public function products()
      {
          return $this->hasMany('App\Models\Product');
      }

      public function groups()
          {
              return $this->hasMany('App\Models\Group');
          }

          public function subgroups()
              {
                  return $this->hasMany('App\Models\SubGroup');
              }

  public function navs()
      {
          return $this->belongsToMany('App\Models\Nav');
      }

    protected $fillable = ['name', 'description'];

    protected $hidden = [];
}
