<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Google;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoogleController extends Controller
{


    public function edit()
    {
      $google = Google::find(1);
      if ($google) {
        return view('admin.google.index', ['google' => $google]);
      }else{
        return view('admin.google.index');
      }
    }

    public function update(Request $request)
    {
      $google = Google::find(1);
      if ($google) {
          $update = $google->update($request->all());
          if ($update) {
            return back()->with('status', 1)->with("message", "Se guardo exitosamente");
          }else{
            return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
          }
        }else{
          $create = Google::create($request->all());
          if ($create) {
            return back()->with('status', 1)->with("message", "Se guardo exitosamente");
          }else{
            return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
          }
        }
      }

}
