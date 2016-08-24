<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubGroup extends Model
{
   protected $table = 'subgroups';
   
     protected $fillable = ['name', 'description', 'category_id', 'group_id'];

     protected $hidden = [];

     public function category()
     {
         return $this->belongsTo('App\Models\Category');
     }
      public function group()
       {
           return $this->belongsTo('App\Models\Group');
       }
}
