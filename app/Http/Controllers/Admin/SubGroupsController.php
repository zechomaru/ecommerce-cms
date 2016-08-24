<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SubGroup;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;

class SubGroupsController extends Controller
{

public function index()
{
  $subgroups = SubGroup::get();
  return view('admin.subgroups.index', ['subgroups' => $subgroups]);
}

public function create()
{
    return view('admin.subgroups.new');
}

public function store(Request $request)
{
  $this->validate($request, [
          'name' => 'required|max:255',
          'category_id' => 'required|max:255',
          'group_id' => 'required|max:255',
      ]);
    $save = SubGroup::create([
                'name' => ucfirst($request['name']),
                'description' => $request['description'],
                'category_id' => $request['category_id'],
                'group_id' => $request['group_id'],
            ]);
      if ($save) {
        return redirect('admin/sub-grupos')->with('status', 1)->with("message", "Se ha guardar con exito");
      }
}

public function show($id)
{
  $subgroup = SubGroup::find($id);
  if ($subgroup) {
    return view('admin.subgroups.show', ['subgroup' => $subgroup]);
  }else{
    return redirect('/admin/sub-grupos');
  }

}

public function edit($id)
{
  $subgroup = SubGroup::find($id);
  if ($subgroup) {
    return view('admin.subgroups.edit', ['subgroup' => $subgroup]);
  }else{
    return redirect('/admin/sub-grupos');
  }
}

public function update(Request $request, $id)
{
  $this->validate($request, [
          'name' => 'required|max:255',
      ]);
  $subgroup = SubGroup::find($id);
  $update = $subgroup->update($request->all());
  if ($update) {
    return redirect('/admin/sub-grupos')->with('status', 1)->with("message", "Se guardo exitosamente");
  }else{
    return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
  }
}

}

