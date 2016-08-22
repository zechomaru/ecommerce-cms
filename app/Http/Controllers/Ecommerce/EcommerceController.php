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
      return view('ecommerce.category', ['products' => $products, 'categories' => $category]);
    }

    public function group($category,$group)
    {
      $category = Category::where('name', '=' , $category)->firstOrFail();
      $group = Group::where('category_id', '=' , $category->id)->where('name', '=' , $group)->firstOrFail();
      $products = Product::where('category_id', '=' , $category->id)->where('group_id', $group->id)->paginate(16);
      return view('ecommerce.group', ['products' => $products, 'groups' => $group]);
    }

    public function subgroup($category,$group, $subgroup)
    {
      $categoryResult = Category::where('name', '=' , $category)->firstOrFail();
      $groupResult = Group::where('name', '=' , $group)->firstOrFail();
      $subgroupResult = SubGroup::where('category_id', '=' , $categoryResult->id)->where('group_id', '=' , $groupResult->id)->firstOrFail();
      $products = Product::where('category_id', '=' , $categoryResult->id)->where('group_id', $groupResult->id)->where('subgroup_id', $subgroupResult->id)->paginate(16);
      return view('ecommerce.subgroup', ['products' => $products, 'subgroups' => $subgroupResult]);
    }

    public function showdestacado($category, $id)
    {
      $categoryResult = Category::where('name', '=' , $category)->firstOrFail();
      $product = Product::where('category_id', '=' , $categoryResult->id)->where('id', '=', $id)->first();
      return view('ecommerce.product', ['product' => $product, 'category' => $categoryResult]);
    }

}
