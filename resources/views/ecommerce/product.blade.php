@extends('layouts.ecommerce_products')
@section('title')
    <title></title>
@endsection

@section('content')
  <section style="background-color:#fff !important">
    <div class="container">
      <div class="row">
      <!-- sucursales -->
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
        <div class="col-md-9">
          <div id="content">
            <!-- <div class="breadcrumb">
                  <a href="http://www.gobantes.cl/index.php?route=common/home">Inicio</a>
                   » <a href="http://www.gobantes.cl/iluminacion">Iluminación</a>
                   » <a href="http://www.gobantes.cl/iluminacion/lamparas">Ampolletas</a>
                   » <a href="http://www.gobantes.cl/iluminacion/lamparas/lamparas-led">LED</a>
                </div> -->
            <h1 class="product_name">{{ $product->name }}</h1>
            <div class="product-info">
                  <div class="left">
                    <div class="image">
                      @if(!$product->images->isEmpty())
                        @foreach($product->images as $image)
                          <a href="" title="" class="colorbox cboxElement">
                            <img style="width:228px; height: 228px; " src="{{ url('storage/app/system/products/' . $product->id . '/'. $image->url) }}" title="{{$product->name}}" id="image">
                          </a>
                          @break
                        @endforeach
                      @else
                          <img src="{{ url('storage/app/system/products/default/test.png') }}" alt="">
                      @endif
                    </div>
                  </div>
                  <div class="right">
                    <div class="description">
                      <span>Marca:</span>
                      <a href="">{{$product->brand->name}}</a>
                      <br>
                      <span>SKU:</span> {{$product->sku}}<br>
                      <span>Disponibilidad:</span> Solo disponible en sucursal
                    </div>
                      <div class="price">Precio: ${{$product->price}}<br>
                      </div>
                      <div class="cart">
                        <p><strong>Consulte por este producto en sucursal</strong></p>  
                      </div>
              </div>
            </div>
            <div id="tabs" class="htabs">
              <a href="#tab-description" class="selected" style="display: inline;">Descripción</a>
            </div>
            <div id="tab-description" class="tab-content" style="display: block;">
              {!! $product->description !!}
           <!--  <ul style="font-size: 13px; line-height: 20.7999992370605px;">
              <li>Especificación: Ampolleta G9 Led&nbsp;</li>
              <li>Detalle: Con difusor de calor aluminio</li>
              <li>Potencia: 3W&nbsp;</li>
              <li><span style="line-height: 20.7999992370605px;">Temperatura de Color</span>: Luz Cálida &nbsp;</li>
          </ul> -->
          </div>


          </div>

        </div>

        <!-- end producto destacado -->

      </div>
    </div>
  </section>
@endsection