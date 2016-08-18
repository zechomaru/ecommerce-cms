<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Setting;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EcommerceController extends Controller
{
    public function index()
    {
      // $products = Product::where()->get();
      $setting = Setting::find(1);
      if (isset($setting)) {
        $products = Product::get();
        if ($products) {
          return view('ecommerce.index', ['products' => $products]);
        }else{
          return view('ecommerce.index');
        }
      }else{
        return redirect('/admin');
      }
    }

    public function category($category)
    {
      $products = Product::where('category_id', $category)->get();
      $category = Category::find($category);
      return view('ecommerce.category', ['products' => $products, 'category' => $category]);
    }

}
