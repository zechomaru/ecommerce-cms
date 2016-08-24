<?php

namespace App\Http\Controllers\Admin;

use App\Logic\Image\ImageRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\ImageSlider;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;

class SlidersController extends Controller
{

  protected $image;

  public function __construct(ImageRepository $imageRepository)
  {
      $this->image = $imageRepository;
  }

  public function getUpload()
  {
      return view('admin.sliders.images');
  }

  public function postUpload()
  {
      $photo = Input::all();
      $response = $this->image->upload($photo);
      return $response;

  }

  public function deleteUpload()
  {

      $filename = Input::get('id');

      if(!$filename)
      {
          return 0;
      }

      $response = $this->image->delete( $filename );

      return $response;
  }

  /**
   * Part 2 - Display already uploaded images in Dropzone
   */

  public function getServerImagesPage($id)
  {
      return view('admin.sliders.images', ['slider' => $id]);
  }

  public function getServerImages()
  {
      $images = ImageSlider::get(['original_name', 'filename']);

      $imageAnswer = [];

      foreach ($images as $image) {
          $imageAnswer[] = [
              'original' => $image->original_name,
              'server' => $image->filename,
              'size' => File::size(public_path('images/full_size/' . $image->filename))
          ];
      }

      return response()->json([
          'images' => $imageAnswer
      ]);
  }






public function index()
{
  $sliders = Slider::get();
  return view('admin.sliders.index', ['sliders' => $sliders]);
}

public function create()
{
    return view('admin.sliders.new');
}

public function store(Request $request)
{
  $this->validate($request, [
          'name' => 'required|max:255',
      ]);
      $save = Slider::create($request->all());

    if ($save) {
        return redirect('admin/slider-image/' . $save->id)->with('status', 1)->with("message", "Se ha guardar con exito");
    }else{
    return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
  }
}

public function show($id)
{
  $slider = Slider::find($id);
  if ($slider) {
    return view('admin.sliders.show', ['slider' => $slider]);
  }else{
    return redirect('/admin/sliders');
  }

}

public function edit($id)
{
  $slider = Slider::find($id);
  if ($slider) {
    return view('admin.sliders.edit', ['slider' => $slider]);
  }else{
    return redirect('/admin/sliders');
  }
}

public function update(Request $request, $id)
{
  $this->validate($request, [
          'name' => 'required|max:255',
          // 'image' => 'mimes:jpeg,jpg,png|required',
      ]);
  $slider = Slider::find($id);
  $status = $request->status;
  if (!$status == 1) {
    $slider->status = 0;
  }

  $update = $slider->update($request->all());
    
  if ($update) {
    return redirect('/admin/sliders')->with('status', 1)->with("message", "Se guardo exitosamente");
  }else{
    return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
  }
}

}

