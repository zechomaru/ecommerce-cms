<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  // protected $table = 'google';
  
    protected $fillable = ['name', 'description'];

    protected $hidden = [];
}
