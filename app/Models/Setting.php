<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $fillable = ['title', 'phone', 'country', 'direction', 'ico'];

    protected $hidden = [];
}
