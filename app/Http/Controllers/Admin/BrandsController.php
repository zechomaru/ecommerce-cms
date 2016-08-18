<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use Storage;

class BrandsController extends Controller
{

public function index()
{
  $brands = Brand::get();
  return view('admin.brands.index', ['brands' => $brands]);
}

public function create()
{
    return view('admin.brands.new');
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
    $save = Brand::create([
                'name' => ucfirst($request['name']),
                'description' => $request['description'],
                'image' => $newNombre . '.' . $extension,
            ]);
    }else{
      $save = Brand::create([
                  'name' => ucfirst($request['name']),
                  'description' => $request['description'],
              ]);
    }

    if ($save) {
      if (isset($image)) {
        Storage::put( 'system/brands/' . $newNombre . '.'. $extension, file_get_contents($image->getRealPath()));
      }
        return redirect('admin/dashboard/marcas')->with('status', 1)->with("message", "Se ha guardar con exito");
    }
}

public function show($id)
{
  $brand = Brand::find($id);
  if ($brand) {
    return view('admin.brands.show', ['brand' => $brand]);
  }else{
    return redirect('/admin/dashboard/marcas');
  }

}

public function edit($id)
{
  $brand = Brand::find($id);
  if ($brand) {
    return view('admin.brands.edit', ['brand' => $brand]);
  }else{
    return redirect('/admin/dashboard/marcas');
  }
}

public function update(Request $request, $id)
{
  $this->validate($request, [
          'name' => 'required|max:255',
          // 'image' => 'mimes:jpeg,jpg,png|required',
      ]);
  $brand = Brand::find($id);

  $image = $request->image;
  $nameImage;
    if ($image) {
        $newNombre = date("d-m-y-h-i-s");
      if ($brand->image) {
        Storage::delete('system/brands/' . $brand->image);
        $extension= $image->getClientOriginalExtension();
        Storage::put( 'system/brands/' . $newNombre . '.'. $extension, file_get_contents($image->getRealPath()));
        $nameImage = $newNombre . '.'. $extension;
      }else{
        $extension= $image->getClientOriginalExtension();
        Storage::put( 'system/brands/' . $newNombre . '.'. $extension, file_get_contents($image->getRealPath()));
        $nameImage = $newNombre . '.'. $extension;
      }
    }
    if (isset($nameImage)) {
      $update = $brand->update([
                    'name' => $request['name'],
                    'description' => $request['description'],
                      'image' => $nameImage,
                ]);
    }else{
      $update = $brand->update($request->all());
    }
  if ($update) {
    return redirect('/admin/dashboard/marcas')->with('status', 1)->with("message", "Se guardo exitosamente");
  }else{
    return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
  }
}

}

