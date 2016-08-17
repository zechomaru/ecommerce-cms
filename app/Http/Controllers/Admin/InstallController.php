<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Admin;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use Artisan;
use Illuminate\Console\Command;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class InstallController extends Controller
{
    use AuthenticatesAndRegistersUsers;

  public function installLogin()
  {
    $validate = \App\Models\Setting::get();
      if ($validate->isEmpty()) {
        return redirect('/admin/install');
      }else{
        return redirect('/admin/dashboard');
      }
  }

  public function index()
  {
    // Artisan::call('migrate:refresh');
    // Artisan::call('migrate', [
    // '--path'     => "app/database/migrations"
    // ]);
    $validate = Setting::get();
      if ($validate->isEmpty()) {
        return view('admin.install.index');
      }else{
        return redirect('/admin/login');
      }
  }

  public function viewFirst()
  {
    $validate = \App\Models\Setting::get();
    if ($validate->isEmpty()) {
        return view('admin.install.first');
    }else{
      return redirect('/admin/dashboard');
    }
  }

  public function createFirst(Request $request)
  {
    $validate = \App\Models\Setting::get();
    if ($validate->isEmpty()) {
      $this->validate($request, [
              'title' => 'required|max:255',
          ]);
      $setting = new Setting;
      $setting->title = $request->title;
      $setting->direction = $request->direction;
      $setting->phone = $request->phone;
      $setting->country = $request->country;
      if ($setting->save()) {
        return redirect('/admin/install/second');
      }
    }
  }

  public function viewSecond()
  {
    $validate = \App\Models\Admin::get();
    if ($validate->isEmpty()) {
        return view('admin.install.second');
    }else{
      return redirect('/admin/dashboard');
    }
  }

  public function createSecond(Request $request)
  {
    $validate = \App\Models\Admin::get();
    $this->validate($request, [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
    if ($validate->isEmpty()) {
      $save = Admin::create([
                  'name' => ucfirst($request['name']),
                  'last_name' => ucfirst($request['last_name']),
                  'email' => $request['email'],
                  'password' => bcrypt($request['password']),
              ]);
        if ($save) {
          return redirect('admin/login');
        }
      }
    }
}

