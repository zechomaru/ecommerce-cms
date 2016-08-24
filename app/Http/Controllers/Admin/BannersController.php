<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use Storage;

class BannersController extends Controller
{

public function index()
{
  $banners = Banner::get();
  return view('admin.banners.index', ['banners' => $banners]);
}

public function create()
{
    return view('admin.banners.new');
}

public function store(Request $request)
{
  $this->validate($request, [
          'name' => 'required|max:255',
          'image' => 'mimes:jpeg,jpg,png|required',
      ]);

    $image = $request->file('image');
    if (isset($image)) {
      $newNombre = date("d-m-y-h-i-s");
      $extension= $image->getClientOriginalExtension();
    $save = Banner::create([
                'name' => ucfirst($request['name']),
                'description' => $request['description'],
                'image' => $newNombre . '.' . $extension,
            ]);
    }else{
      $save = Banner::create([
                  'name' => ucfirst($request['name']),
                  'description' => $request['description'],
              ]);
    }

    if ($save) {
      if (isset($image)) {
        Storage::put( 'system/banners/' . $newNombre . '.'. $extension, file_get_contents($image->getRealPath()));
      }
        return redirect('admin/banners')->with('status', 1)->with("message", "Se ha guardar con exito");
    }
}

public function show($id)
{
  $banner = Banner::find($id);
  if ($banner) {
    return view('admin.banners.show', ['banner' => $banner]);
  }else{
    return redirect('/admin/banners');
  }

}

public function edit($id)
{
  $banner = Banner::find($id);
  if ($banner) {
    return view('admin.banners.edit', ['banner' => $banner]);
  }else{
    return redirect('/admin/banners');
  }
}

public function update(Request $request, $id)
{
  $this->validate($request, [
          'name' => 'required|max:255',
          // 'image' => 'mimes:jpeg,jpg,png|required',
      ]);
  $banner = Banner::find($id);

  $image = $request->image;
  $nameImage;
    if ($image) {
        $newNombre = date("d-m-y-h-i-s");
      if ($banner->image) {
        Storage::delete('system/banners/' . $banner->image);
        $extension= $image->getClientOriginalExtension();
        Storage::put( 'system/banners/' . $newNombre . '.'. $extension, file_get_contents($image->getRealPath()));
        $nameImage = $newNombre . '.'. $extension;
      }else{
        $extension= $image->getClientOriginalExtension();
        Storage::put( 'system/banners/' . $newNombre . '.'. $extension, file_get_contents($image->getRealPath()));
        $nameImage = $newNombre . '.'. $extension;
      }
    }
    if (isset($nameImage)) {
      $update = $banner->update([
                    'name' => $request['name'],
                    'description' => $request['description'],
                      'image' => $nameImage,
                ]);
    }else{
      $update = $banner->update($request->all());
    }
  if ($update) {
    return redirect('/admin/banners')->with('status', 1)->with("message", "Se guardo exitosamente");
  }else{
    return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
  }
}

}

