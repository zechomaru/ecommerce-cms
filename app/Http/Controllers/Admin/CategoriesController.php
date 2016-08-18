<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

public function index()
{
  $categories = Category::get();
  return view('admin.categories.index', ['categories' => $categories]);
}

public function create()
{
    return view('admin.categories.new');
}

public function store(Request $request)
{
  $this->validate($request, [
          'name' => 'required|max:255',
      ]);
    $save = Category::create([
                'name' => ucfirst($request['name']),
                'description' => $request['description'],
            ]);
      if ($save) {
        return redirect('admin/dashboard/categorias')->with('status', 1)->with("message", "Se ha guardar con exito");
      }
}

public function show($id)
{
  $category = Category::find($id);
  if ($category) {
    return view('admin.categories.show', ['category' => $category]);
  }else{
    return redirect('/admin/dashboard/categorias');
  }

}

public function edit($id)
{
  $category = Category::find($id);
  if ($category) {
    return view('admin.categories.edit', ['category' => $category]);
  }else{
    return redirect('/admin/dashboard/categorias');
  }
}

public function update(Request $request, $id)
{
  $this->validate($request, [
          'name' => 'required|max:255',
      ]);
  $category = Category::find($id);
  $update = $category->update($request->all());
  if ($update) {
    return redirect('/admin/dashboard/categorias')->with('status', 1)->with("message", "Se guardo exitosamente");
  }else{
    return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
  }
}

}

