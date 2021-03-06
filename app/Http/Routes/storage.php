<?php 
  // acceso al storage
    Route::get('images/setting/{archivo}', function ($archivo) {
         if (is_array($archivo)) {
                 $archivo = implode('/', $archivo);
             }
             // storage_path('app') - path to /storage/app folder
             $path = storage_path('app') . '/system/' . $archivo;
             $file = File::get($path);
             $type = File::mimeType($path);

             return \Response::make($file,200)
                 ->header("Content-Type", $type);
    });

    Route::get('images/brands/{archivo}', function ($archivo) {
         if (is_array($archivo)) {
                 $archivo = implode('/', $archivo);
             }
             // storage_path('app') - path to /storage/app folder
             $path = storage_path('app') . '/system/brands/' . $archivo;
             $file = File::get($path);
             $type = File::mimeType($path);

             return \Response::make($file,200)
                 ->header("Content-Type", $type);
    });

    Route::get('images/banners/{archivo}', function ($archivo) {
         if (is_array($archivo)) {
                 $archivo = implode('/', $archivo);
             }
             // storage_path('app') - path to /storage/app folder
             $path = storage_path('app') . '/system/banners/' . $archivo;
             $file = File::get($path);
             $type = File::mimeType($path);

             return \Response::make($file,200)
                 ->header("Content-Type", $type);
    });


      Route::get('storage/app/system/{folder}/{id}/{archivo}', function ($folder, $id, $archivo) {
       if (is_array($archivo)) {
               $archivo = implode('/', $archivo);
           }
           // storage_path('app') - path to /storage/app folder
           $path = storage_path('app') . '/system/' .$folder . '/'. $id . '/' . $archivo;
           $file = File::get($path);
           $type = File::mimeType($path);

           return \Response::make($file,200)
               ->header("Content-Type", $type);
  });