<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;

class ProductsController extends Controller
{
    public function index()
    {
      $products = Product::get();
      return view('admin.products.index', ['products' => $products]);
    }

    public function create()
    {
      return view('admin.products.new');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required',
          'price' => 'required|between:0,99.99|regex:/^\d*(\.\d{2})?$/',
          'sku' => 'required|regex:/^\d*(\.\d{2})?$/',
          'category_id' => 'required',
          'brand_id' => 'required',
      ]);

      $images = $request->file('images');
      $product = Product::create($request->all());
      if ($product) {
        if (isset($images)) {
          $i = 0;
          foreach ($images as $key) {
            $newNombre = date("d-m-y-h-i-s");
            $extension = $key->getClientOriginalExtension();
            $image = Image::create(['url' => $newNombre . $i . '.'. $extension]);
            if ($image) {
              Storage::put( 'system/products/'. $product->id . '/' . $newNombre .$i. '.'. $extension, file_get_contents($key->getRealPath()));
              $product->images()->save($image);
              $i++;
            }
          }
          return redirect('/admin/dashboard/productos')->with('status', 1)->with("message", "Se guardo exitosamente");
        }else{
          return redirect('/admin/dashboard/productos')->with('status', 1)->with("message", "Se guardo exitosamente");
        }
      }else{
        return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
      }
     
    }

    public function show($id)
    {
      $product = Product::find($id);
      if ($product) {
        return view('admin.products.show', ['product' => $product]);
      }else{
        return redirect('/admin/dashboard/productos');

      }
    }

    public function edit($id)
    {
      $product = Product::find($id);
      if ($product) {
        return view('admin.products.edit', ['product' => $product]);
      }else{
        return redirect('/admin/dashboard/productos');
      }
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'name' => 'required',
          'price' => 'required|between:0,99.99|regex:/^\d*(\.\d{2})?$/',
          'sku' => 'required|regex:/^\d*(\.\d{2})?$/',
          'category_id' => 'required',
          'brand_id' => 'required',
      ]);

      $images = $request->file('images');
      $product = Product::find($id);
      if ($product) {
        if ($images != [null]) {
          Storage::deleteDirectory('system/products/' . $product->id);
          $product->images()->detach();
          $i = 0;
          foreach ($images as $key) {
            $newNombre = date("d-m-y-h-i-s");
            $extension = $key->getClientOriginalExtension();
            $image = Image::create(['url' => $newNombre . $i . '.'. $extension]);
            if ($image) {
              Storage::put( 'system/products/'. $product->id . '/' . $newNombre .$i. '.'. $extension, file_get_contents($key->getRealPath()));
              $product->images()->save($image);
              $i++;
            }
          }
          $product->update($request->all());
          return redirect('/admin/dashboard/productos')->with('status', 1)->with("message", "Se guardo exitosamente");
        }else{
          $product->update($request->all());
          return redirect('/admin/dashboard/productos')->with('status', 1)->with("message", "Se guardo exitosamente");
        }
      }else{
        return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
      }
    }






}
