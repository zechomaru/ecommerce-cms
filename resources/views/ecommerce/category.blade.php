@extends('layouts.ecommerce_products')
@section('title')
    <title></title>
    <style>.contet{background-image: none;}</style>
@endsection

@section('content')
  <section>
    <div class="container">
      <div class="row">
      <!-- categorias -->
        <div class="col-md-3 hidden-xs hidden-sm">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-heading">Categorías</div>
                <div class="box-content">
                  <ul class="box-category">
                    @foreach(App\Models\Category::get() as $category)
                    <li class=" arrowR">
                      <p class="toggle-menu">{{$category->name}}</p>
                      <ul style="overflow: hidden; display: none;">
                        @foreach(App\Models\Group::where('category_id', '=', $category->id)->get() as $group )
                        <li>
                          <p class="toggle-menu">{{$group->name}}</p>
                          <ul>
                            @foreach(App\Models\SubGroup::where('category_id' ,'=' , $category->id)->where('group_id' , '=', $group->id)->get() as $subgroup)
                            <li>
                              <a href="">{{$subgroup->name}}</a>                  
                              
                            </li>
                            @endforeach
                          </ul>
                        </li>
                        @endforeach

                      </ul>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- end sucursales -->
        <!-- producto destacado -->
        <div class="col-md-9 productos_destacados">
          <div class="row">
            <div class="col-md-12">
              <h2>{{ $categories->name }}</h2>
            </div>

            @foreach($products as $product)
              <div class="col-md-3 col-xs-12 col-sm-4 product">
                <article>
                  <a href="/show/producto/{{$product->category->name}}/{{$product->id}}">
                    @if(!$product->images->isEmpty())
                      @foreach($product->images as $image)
                        <img src="{{ url('storage/app/system/products/' . $product->name . '/'. $image->url) }}" alt="">
                        @break
                      @endforeach
                    @else
                        <img src="{{ url('storage/app/system/products/default/test.png') }}" alt="">
                    @endif
                  </a>
                  <a class="title">{{ $product->name }}
                    <span class="sku">SKU: {{ $product->sku }}</span>
                  </a>
                  <p class="price">${{ $product->price }}</p>
                  <p class="sucursal">Consulte este producto en su sucursal</p>
                </article>
              </div>
            @endforeach
            <div class="paginator">
              
              {{ $products->links() }}
              <div class="results">Mostrando de {{$products->firstItem()}} a {{$products->lastItem()}} de {{$products->total()}} ({{$products->lastPage()}} Páginas)</div>
            </div>

          </div>
        </div>

        <!-- end producto destacado -->

      </div>
    </div>
  </section>
@endsection