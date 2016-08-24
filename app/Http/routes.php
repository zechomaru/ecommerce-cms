<?php
  // ecommerce 
  require app_path('Http/Routes/ecommerce.php');
  // usuarios
  require app_path('Http/Routes/user.php');
  // almacenamiento
  require app_path('Http/Routes/storage.php');
  // administración
 Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
  // Route::get('/slider-images', ['as' => 'upload', 'uses' => 'SlidersController@getUpload']);
Route::get('/slider-image/{id}', ['as' => 'upload-2', 'uses' => 'SlidersController@getServerImagesPage']);

  Route::post('/slider-images/upload', ['as' => 'upload-post', 'uses' =>'SlidersController@postUpload']);
Route::get('/server-images', ['as' => 'server-images', 'uses' => 'SlidersController@getServerImages']);

  Route::post('/slider-images/upload/delete', ['as' => 'upload-remove', 'uses' =>'SlidersController@deleteUpload']);
  require app_path('Http/Routes/admin.php');
});
//instalación
 Route::group(['prefix' => 'install', 'namespace' => 'Install'], function () {
  require app_path('Http/Routes/install.php');
});