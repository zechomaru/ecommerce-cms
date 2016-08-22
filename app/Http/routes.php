<?php
  // ecommerce 
  require app_path('Http/Routes/ecommerce.php');
  // usuarios
  require app_path('Http/Routes/user.php');
  // almacenamiento
  require app_path('Http/Routes/storage.php');
  // administración
 Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
  require app_path('Http/Routes/admin.php');
});
//instalación
 Route::group(['prefix' => 'install', 'namespace' => 'Install'], function () {
  require app_path('Http/Routes/install.php');
});