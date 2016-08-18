<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Nav;
use App\Models\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NavsController extends Controller
{
    public function index()
    {
      $navs = Nav::get();
      return view('admin.navs.index', ['navs' => $navs]);
    }

    public function create()
    {
      return view('admin.navs.new');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required',
          'category' => 'required',
      ]);
      $test = $request->category;
      $ids = '';
      for ($i=0; $i < count($test) ; $i++) { 
        if (count($test)- 1 == $i) {
          $ids .= $test[$i];
        }else{
          $ids .= $test[$i] . ',';
        }
      }
      $create = Nav::create($request->all());
      if ($create) {
        $create->categories()->sync([$ids]);
        return redirect('/admin/dashboard/menus')->with('status', 1)->with("message", "Se guardo exitosamente");
      }else{
        return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
      }
    }

    public function show($id)
    {
      $nav = Nav::find($id);
      if ($nav) {
        return view('admin.navs.show', ['nav' => $nav]);
      }else{
        return redirect('/admin/dashboard/menus');

      }
    }

    public function edit($id)
    {
      $nav = Nav::find($id);
      if ($nav) {
        return view('admin.navs.edit', ['nav' => $nav]);
      }else{
        return redirect('/admin/dashboard/menus');
      }
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'name' => 'required',
          'category' => 'required',
      ]);
      $nav = Nav::find($id);
      $status = $request->status;
      if (!$status == 1) {
        $nav->status = 0;
      }
      $test = $request->category;
      $ids = '';
      for ($i=0; $i < count($test) ; $i++) { 
        if (count($test)- 1 == $i) {
          $ids .= $test[$i];
        }else{
          $ids .= $test[$i] . ',';
        }
      }
      $update = $nav->update($request->all());
      if ($update) {
          $nav->categories()->sync([$ids]);
        return back()->with('status', 1)->with("message", "Se guardo exitosamente");
      }else{
        return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
      }
    }

}
