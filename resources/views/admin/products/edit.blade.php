@extends('layouts.admin')

@section('title')
    <title>Editar {{ $product->name }}</title>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Producto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/dashboard/producto/update/' . $product->id) }}" method="POST" >
              {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group">
                  <label for="">Nombre</label>
                  <input type="text" name="name" class="form-control" id="" placeholder="Nombre" value="{{ $product->name }}">
                </div>

                <div class="form-group">
                  <label for="">Sku</label>
                  <input type="text" name="sku" class="form-control" id="" placeholder="Sku" value="{{ $product->sku }}">
                </div>

                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                </div>

                <div class="form-group">
                  <label for="">Imagenes</label>
                  <input id="fileupload" type="file" name="images[]" multiple="">
                </div>


                <div class="form-group">
                  <label for="">Descripción</label>
                  <input type="text" name="description" class="form-control" id="" placeholder="Descripción" value="{{ $product->description }}">
                </div>

                <div class="form-group">
                  <label for="">Categoria</label>
                  <?php 
                    $categories = App\Models\Category::get();
                   ?>
                  <select name="category_id" id="">
                    @foreach($categories as $category)
                      @if( $product->category_id == $category->id)
                        <option value="{{ $category->id }}" selected="true">{{ $category->name }}</option>
                        @continue
                      @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Marca</label>
                  <?php 
                    $brands = App\Models\Brand::get();
                   ?>
                  <select name="brand_id" id="">
                    @foreach($brands as $brand)
                      @if( $product->brand_id == $brand->id )
                        <option value="{{ $brand->id }}" selected="true">{{ $brand->name }}</option>
                        @continue
                      @else
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
              {{method_field('PUT')}}
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.box-body -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection