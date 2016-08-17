<?php
use App\Models\Product;
  use App\Http\Requests;
use Illuminate\Http\Request;
  //home
  Route::get('/', 'Ecommerce\EcommerceController@index');

  //users
// Route::auth();

  //categorias
  Route::get('/categoria/{category}', 'Ecommerce\EcommerceController@category');

  Route::get('/producto/{id}', function($id)
  {
    $product = Product::find($id);
    return view('ecommerce.product', ['product' =>$product]);
    
  });

Route::post('/newsletter', function(Request $request)
{
  $newsletter = App\Models\Newsletter::create($request->all());
  if ($newsletter) {
    return redirect('/');
  }
});