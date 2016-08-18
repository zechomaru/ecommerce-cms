@extends('layouts.ecommerce')
@section('title')
    <title></title>
@endsection

@section('content')
  <section>
    <div class="container">
      <div class="row">
      <!-- sucursales -->
        <div class="col-md-4 hidden-xs hidden-sm">
          <div class="row">
            <div class="col-md-12">
              <h3>SUCURSALES</h3>
            </div>
          </div>
        </div>

        <!-- end sucursales -->
        <!-- producto destacado -->
        <div class="col-md-8 productos_destacados">
          <div class="row">
            <div class="col-md-12">
              <h3>DESTACADOS</h3>
            </div>

            @foreach($products as $product)
              <div class="col-md-4 col-xs-12 col-sm-4 product">
                <article>
                  <a href="producto/{{ $product->id }}">
                    @foreach($product->images as $image)
                      <img src="{{ url('storage/app/system/products/' . $product->id . '/'. $image->url) }}" alt="">
                      @break
                    @endforeach
                  </a>
                  <a class="title">{{ $product->name }}
                    <span class="sku">SKU: {{ $product->sku }}</span>
                  </a>
                  <p class="price">${{ $product->price }}</p>
                  <p class="sucursal">Consulte este producto en su sucursal</p>
                </article>
              </div>
            @endforeach

          </div>
        </div>

        <!-- end producto destacado -->

      </div>
    </div>
  </section>
@endsection