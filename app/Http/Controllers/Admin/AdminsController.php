<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AdminsController extends Controller
{
    use AuthenticatesAndRegistersUsers;

  public function index()
  {
    $admins = Admin::get();
    if ($admins) {
      return view('admin.admins.index', ['admins' => $admins]);
    }
  }

public function create()
{
    return view('admin.admins.new');
}

public function store(Request $request)
{
  $this->validate($request, [
          'name' => 'required|max:255',
          'last_name' => 'required|max:255',
          'email' => 'required|email|max:255|unique:admins',
          'password' => 'required|min:6|confirmed',
      ]);
    $save = Admin::create([
                'name' => ucfirst($request['name']),
                'last_name' => ucfirst($request['last_name']),
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
            ]);
      if ($save) {
        return redirect('admin/dashboard/admins')->with('status', 1)->with("message", "Se ha guardar con exito");
      }
}

  public function show($id)
  {
    $admin = Admin::find($id);
      if ($admin) {
        return view('admin.admins.show', ['admin' => $admin]);
      }else{
        $admins = Admin::get();
        return view('admin.admins.index', ['admins' => $admins]);
      }
  }


  public function edit($id)
  {
    $admin = Admin::find($id);
    if ($admin) {
      return view('admin.admins.edit', ['admin' => $admin]);
    }else{
      $admins = Admin::get();
      return view('admin.admins.index', ['admins' => $admins]);
    }
    
  }

  public function update(Request $request, $id)
  {
    $admin = Admin::find($id);
      if (!$request->password == "") {
        $this->validate($request, [
                'name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'email' => 'required|email|max:255|',
                'password' => 'required|min:6|confirmed',
            ]);
        $update = $admin->update([
            'name' => ucfirst($request['name']),
            'last_name' => ucfirst($request['last_name']),
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        
      }else{
        $this->validate($request, [
                'name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'email' => 'required|email|max:255|',
            ]);
        $update = $admin->update([
            'name' => ucfirst($request['name']),
            'last_name' => ucfirst($request['last_name']),
            'email' => $request['email'],
        ]);
      }

        if ($update) {
          return back()->with('status', 1)->with("message", "Se ha guardar con exito");
        }else{
          return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
        }
  }




}

