<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Group;
use App\Models\SubGroup;
use App\Models\Setting;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EcommerceController extends Controller
{
    public function index()
    {
      // $products = Product::where()->get();
        $products = Product::where('important', 1)->get();
        if ($products) {
          return view('ecommerce.index', ['products' => $products]);
        }else{
          return view('ecommerce.index');
        }
    }

    public function category($category)
    {
      $category = Category::where('name', '=' , $category)->firstOrFail();
      $products = Product::where('category_id', '=', $category->id)->paginate(16);
      return view('ecommerce.products', ['products' => $products, 'name' => $category]);
    }

    public function group($category,$group)
    {
      $category = Category::where('name', '=' , $category)->firstOrFail();
      $group = Group::where('category_id', '=' , $category->id)->where('name', '=' , $group)->firstOrFail();
      $products = Product::where('category_id', '=' , $category->id)->where('group_id', $group->id)->paginate(16);
      return view('ecommerce.products', ['products' => $products, 'name' => $group]);
    }

    public function subgroup($category,$group, $subgroup)
    {
      $category = Category::where('name', '=' , $category)->firstOrFail();
      $group = Group::where('name', '=' , $group)->firstOrFail();
      $subgroup = SubGroup::where('category_id', '=' , $category->id)->where('group_id', '=' , $group->id)->firstOrFail();
      $products = Product::where('category_id', '=' , $category->id)->where('group_id', $group->id)->where('subgroup_id', $subgroup->id)->paginate(16);
      return view('ecommerce.products', ['products' => $products, 'name' => $subgroup]);
    }

    public function showdestacado($category, $id)
    {
      $categoryResult = Category::where('name', '=' , $category)->firstOrFail();
      $product = Product::where('category_id', '=' , $categoryResult->id)->where('id', '=', $id)->first();
      return view('ecommerce.product', ['product' => $product, 'category' => $categoryResult]);
    }

}
