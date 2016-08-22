<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubGroup extends Model
{
   protected $table = 'subgroups';
   
     protected $fillable = ['name', 'description'];

     protected $hidden = [];
}
