@extends('layouts.ecommerce')
@section('title')
    <title>ddd</title>
@endsection


@section('content')
<div id="column-left" class="si-ver">
  <div class="box">
  <div class="box-heading">Categorías</div>
  <div class="box-content">
    <ul class="box-category">
      @foreach(App\Models\Category::get() as $category)
        @if( Request::is( 'categoria/' . $category->name) == $category->name)
          <li class="active arrowR">
        @else
          <li class="arrowR">
        @endif
          <p class="toggle-menu">{{$category->name}}</p>
          <ul>
            @foreach(App\Models\Group::where('category_id', '=', $category->id)->get() as $group)

              <li class="">
                <p class="toggle-menu">{{ $group->name }}</p>
                <ul>
                  @foreach(App\Models\SubGroup::where('category_id', '=', $category->id)->where('group_id', '=', $group->id)->get() as $subgroup)
                    <li>
                      <a href=""> {{ $subgroup->name }}</a>
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

<div id="banner0" class="banner">
  <div style="display: block;">
    <a href="/iluminacion">
      <img src="http://www.gobantes.cl/image/cache/data/banners/360x147_camion-253x103.jpg" alt="Eaton" title="Eaton" class="img-responsive inline-block">
    </a>
  </div>
    </div>

<div id="banner1" class="banner">
      <div style="display: block;">
      <img src="http://www.gobantes.cl/image/cache/data/banners/360x147_gobantes_oferta_lg1-253x103.jpg" alt="ekoline" title="ekoline" class="img-responsive inline-block">
      </div>
    </div>
</div>

  <div id="content">  <div class="breadcrumb">
          <a href="http://www.gobantes.cl/index.php?route=common/home">Inicio</a>
           » <a href="http://www.gobantes.cl/iluminacion">Iluminación</a>
           » <a href="http://www.gobantes.cl/iluminacion/ballast-y-accesorios">Balastos y accesorios</a>
           » <a href="http://www.gobantes.cl/iluminacion/ballast-y-accesorios/celda-base-fotoeléctrica">Celdas y bases fotoeléctricas</a>
        </div>
    <h1>{{$name->name}}</h1>
            <div class="product-filter">
      <div class="display"><b>Mostrar:</b> <a onclick="display('list');">Lista</a> <b>/</b> Cuadrícula</div>
      <div class="limit"><b>Mostrar:</b>
        <select onchange="location = this.value;">
                          <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?limit=16" selected="selected">16</option>
                                  <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?limit=25">25</option>
                                  <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?limit=50">50</option>
                                  <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?limit=75">75</option>
                                  <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?limit=100">100</option>
                        </select>
      </div>
      <div class="sort"><b>Ordenar por:</b>
        <select onchange="location = this.value;">
                          <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?sort=p.sort_order&amp;order=ASC" selected="selected">Por defecto</option>
                                  <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?sort=pd.name&amp;order=ASC">Nombre(A - Z)</option>
                                  <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?sort=pd.name&amp;order=DESC">Nombre(Z - A)</option>
                                  <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?sort=p.price&amp;order=ASC">Precio (Menor &gt; Mayor)</option>
                                  <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?sort=p.price&amp;order=DESC">Precio (Mayor &gt; Menor)</option>
                                  <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?sort=p.model&amp;order=ASC">Modelo (A - Z)</option>
                                  <option value="http://www.gobantes.cl/iluminacion/celda-base-fotoeléctrica?sort=p.model&amp;order=DESC">Modelo (Z - A)</option>
                        </select>
      </div>
    </div>
    <div class="product-compare"><a href="http://www.gobantes.cl/index.php?route=product/compare" id="compare-total">Compara producto (0)</a></div>


    <div class="product-grid">
      @foreach($products as $product)
        <div>
          <div class="image">
            <a href="/show/producto/{{$product->category->name}}/{{ $product->id }}">
              @if(!$product->images->isEmpty())
                @foreach($product->images as $image)
                  <img border="0" style="" src="{{ url('storage/app/system/products/' . $product->id . '/'. $image->url) }}" alt="$product->name">
                  @break
                @endforeach
              @else
                  <img border="0" src="{{ url('storage/app/system/products/default/test.png') }}" alt="">
              @endif
            </a>
          </div>
        <div class="name">
          <a href="{{ url('storage/app/system/products/' . $product->id . '/'. $image->url) }}">{{$product->name}}
          <br>
            <span style="color: #CCC;">SKU: {{$product->sku}}</span>
          </a>
        </div>
        <div class="description">{{ $product->description }}</div>
        <div class="price">${{ $product->price }}</div>
        <div class="cart">
          <p><strong>Consulte en sucursal</strong></p>
        </div>

        <div class="wishlist"><a onclick="addToWishList('13880');">Agregar a la lista de favoritos</a></div><div class="compare"><a onclick="addToCompare('13880');">Comparar</a></div></div>
      @endforeach

    </div>
    <div class="pagination">
      {{ $products->links() }}
      <div class="results">Mostrando de {{$products->firstItem()}} a {{$products->lastItem()}} de {{$products->total()}} ({{$products->lastPage()}} Páginas)</div>
    </div>

        </div>
@endsection