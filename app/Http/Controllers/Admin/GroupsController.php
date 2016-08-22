<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;

class GroupsController extends Controller
{

public function index()
{
  $groups = Group::get();
  return view('admin.groups.index', ['groups' => $groups]);
}

public function create()
{
    return view('admin.groups.new');
}

public function store(Request $request)
{
  $this->validate($request, [
          'name' => 'required|max:255',
      ]);
    $save = Group::create([
                'name' => ucfirst($request['name']),
                'description' => $request['description'],
            ]);
      if ($save) {
        return redirect('admin/grupos')->with('status', 1)->with("message", "Se ha guardar con exito");
      }
}

public function show($id)
{
  $group = Group::find($id);
  if ($group) {
    return view('admin.groups.show', ['group' => $group]);
  }else{
    return redirect('/admin/grupos');
  }

}

public function edit($id)
{
  $group = Group::find($id);
  if ($group) {
    return view('admin.groups.edit', ['group' => $group]);
  }else{
    return redirect('/admin/grupos');
  }
}

public function update(Request $request, $id)
{
  $this->validate($request, [
          'name' => 'required|max:255',
      ]);
  $group = Group::find($id);
  $update = $group->update($request->all());
  if ($update) {
    return redirect('/admin/grupos')->with('status', 1)->with("message", "Se guardo exitosamente");
  }else{
    return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
  }
}

}

