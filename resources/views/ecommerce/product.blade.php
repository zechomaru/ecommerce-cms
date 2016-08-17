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
          <h1>{{ $product->name }}</h1>
          @foreach($product->images as $image)
            <img src="{{ url('storage/app/system/products/' . $product->id . '/'. $image->url) }}" alt="">
            @break
          @endforeach
          <p>Marca: {{ $product->brand->name }}</p>
          <p>SKU: {{ $product->sku }}</p>
          <p>Price: {{ $product->price }}</h1>
        </div>

        <!-- end producto destacado -->

      </div>
    </div>
  </section>
@endsection