@extends('layouts.admin')

@section('title')
    <title>Nuevo Producto</title>
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
              <h3 class="box-title">Nuevo producto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group">
                  <label for="">Nombre</label>
                  <input type="text" name="name" class="form-control" id="" placeholder="Nombre">
                </div>

                <div class="form-group">
                  <label for="">Sku</label>
                  <input type="text" name="sku" class="form-control" id="" placeholder="Sku">
                </div>

                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="text" name="price" class="form-control">
                </div>

                <div class="form-group">
                  <label for="">Imagenes</label>
                  <input id="fileupload" type="file" name="images[]" multiple="">
                </div>


                <div class="form-group">
                  <label for="">Descripción</label>
                  <input type="text" name="description" class="form-control" id="" placeholder="Descripción">
                </div>

                <div class="form-group">
                  <label for="">Categoria</label>
                  <?php 
                    $categories = App\Models\Category::get();
                   ?>
                  <select name="category_id" id="">
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                      <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                  </select>
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
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