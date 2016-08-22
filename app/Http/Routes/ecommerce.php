<?php
use App\Models\Product;
  use App\Http\Requests;
use Illuminate\Http\Request;
  //home
  Route::get('/', 'Ecommerce\EcommerceController@index');
  //categorias
  Route::get('/categoria/{category}', 'Ecommerce\EcommerceController@category');
  Route::get('/categoria/{category}/grupo/{group}', 'Ecommerce\EcommerceController@group');
  Route::get('/categoria/{category}/grupo/{group}/subgrupo/{subgroup}', 'Ecommerce\EcommerceController@subgroup');

  Route::get('show/producto/{category}/{id}', 'Ecommerce\EcommerceController@showdestacado');

Route::post('/newsletter', function(Request $request)
{
  $newsletter = App\Models\Newsletter::create($request->all());
  if ($newsletter) {
    return redirect('/');
  }
});