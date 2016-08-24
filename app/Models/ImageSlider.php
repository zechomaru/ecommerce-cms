<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageSlider extends Model
{
  public static $rules = [
      'file' => 'required|mimes:png,gif,jpeg,jpg,bmp',
      'slider' => 'required'
  ];

  public static $messages = [
      'file.mimes' => 'Uploaded file is not in image format',
      'file.required' => 'Image is required'
  ];
    protected $table = 'image_sliders';
    protected $fillable = ['original_name', 'filename'];

    protected $hidden = [];
}
