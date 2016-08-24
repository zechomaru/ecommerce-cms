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
                @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="">Nombre</label>
                  <input type="text" name="name" class="form-control" id="" placeholder="Nombre" value="{{ old('name') }}">
                </div>

                <div class="form-group {{ $errors->has('sku') ? ' has-error' : '' }}">
                  <label for="">Sku</label>
                  <input type="text" name="sku" class="form-control" id="" placeholder="Sku" value="{{ old('sku') }}">
                </div>

                <div class="input-group {{ $errors->has('price') ? ' has-error' : '' }}">
                  <span class="input-group-addon">$</span>
                  <input type="text" name="price" class="form-control" value="{{ old('price') }}">
                </div>

                <div class="form-group">
                  <label for="">Imagenes</label>
                  <input id="fileupload" type="file" name="images[]" multiple="">
                </div>


                <div class="form-group">
                  <label for="">Descripción</label>
                  <textarea class="ckeditor" name="description" id="editor1" rows="10" cols="80" value="{{ old('description') }}">
                  </textarea>
                </div>

                <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
                  <label for="">Categoria</label>
                  <?php 
                    $categories = App\Models\Category::get();
                   ?>
                  <select name="category_id" id="category_id">
                    <option value=''>Selecione una categoria</option>
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                 

                <div class="form-group {{ $errors->has('grupo') ? ' has-error' : '' }}">
                  <label for="">Grupos</label>
                  <select name="group_id" id="select_groups" class="select_groups">
                    <option value=''>Selecione un grupo</option>
                  </select>
                </div>

                <div class="form-group {{ $errors->has('subgrupo') ? ' has-error' : '' }}">
                  <label for="">Sub-Grupos</label>
                  <select name="subgroup_id" id="select_subgroups">
                    <option value=''>Selecione un sub-grupo</option>
                  </select>
                </div>

                <div class="form-group {{ $errors->has('brand') ? ' has-error' : '' }}">
                  <label for="">Marca</label>
                  <?php 
                    $brands = App\Models\Brand::get();
                   ?>
                  <select name="brand_id" id="">
                    <option value=''>Selecione una marca</option>
                    @foreach($brands as $brand)
                      <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                  </select>
                </div>

                <?php 
                  $destacados = App\Models\Product::where('important', '=', 1)->count();
                 ?>
                <div class="form-group">
                  <label for="">Destacado</label>
                 @if($destacados >10)
                    <p>Ya tiene 9 productos destacado</p>

                  @else
                    <div class="switch">
                      <label for="checktoggle">NO
                        {{ Form::checkbox('important', 1, null, ['id' => 'checktoggle']) }}
                        <span class="lever"></span>
                        Si
                      </label>
                    </div>
                  @endif
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
@section('footer')
  <script src="{{ asset('/vendors/ckeditor.js') }}"></script>
@endsection