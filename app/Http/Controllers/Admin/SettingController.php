<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;

class SettingController extends Controller
{
    public function edit()
    {
      $setting = Setting::find(1);
      $countries = ['Venezuela', 'Perú', 'Chile', 'Colombia'];
      return view('admin.settings.edit', ['setting' => $setting, 'countries' =>$countries]);
    }

    public function update(Request $request)
    {
      $countries = ['Venezuela', 'Perú', 'Chile', 'Colombia'];
      $setting = Setting::findOrFail(1);

      //obtenemos el campo file definido en el formulario
     $fileIco = $request->fileIco;
     $fileLogo = $request->fileLogo;
     //obtenemos el nombre del archivo
     if (isset($fileIco)) {
        $nombre = $fileIco->getClientOriginalName();
       $extension= explode(".", $nombre);
       if ($extension[1] == "ico" || $extension[1] == "ICO") {
        //atualizar el nombre en la base de datos
        $setting->ico = "ico.ico";
        //indicamos que queremos guardar un nuevo archivo en el disco local
        Storage::put( 'system/'."ico.".$extension[1], file_get_contents($request->fileIco->getRealPath()));
       }else{
          return back()->with('status', 0)->with("message", "El formato de imagen tiene que ser ICO");
       }
     }

     if (isset($fileLogo)) {
        $nombre = $fileLogo->getClientOriginalName();
       $extension= explode(".", $nombre);
       if ($extension[1] == "png" || $extension[1] == "PNG") {
        //atualizar el nombre en la base de datos
        $setting->logo = "logo.png";
        //indicamos que queremos guardar un nuevo archivo en el disco local
        Storage::put( 'system/'."logo.".$extension[1], file_get_contents($request->fileLogo->getRealPath()));
       }else{
          return back()->with('status', 0)->with("message", "El formato de imagen tiene que ser PNG");
       }
     }

       $update = $setting->update($request->all());
     if ($update) {
       return back()->with('status', 1)->with("message", "Se guardo exitosamente");
     }else{
       return back()->with('status', 0)->with("message", "Ha ocurrido un error al guardar");
     }
    }
}
