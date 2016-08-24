<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  // protected $table = 'google';
  
    protected $fillable = ['name', 'description', 'category_id'];

    protected $hidden = [];

    public function category()
     {
         return $this->belongsTo('App\Models\Category');
     }
     public function subgroups()
         {
             return $this->hasMany('App\Models\SubGroup');
         }
}
