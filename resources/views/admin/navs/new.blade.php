@extends('layouts.admin')

@section('title')
    <title>Configuracion</title>
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
              <h3 class="box-title">Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" >
              <div class="box-body">
                {{ csrf_field() }}
                @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="">Nombre del menu</label>
                  <input type="text" name="name" class="form-control" id="" placeholder="Nombre" value="{{ old('name') }}">
                </div>

                <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
                  <label for="">Categoria</label>
                  <div>
                  @if( count(App\Models\Category::all()) != 0)
                    @foreach(App\Models\Category::all() as $category)
                      <label for="">{{ $category->name }}</label>
                      <input type="checkbox" value="{{ $category->id }}"  name="category[]" class="input">
                    @endforeach
                    @else
                      No hay categorias cree una categoria <a href="/admin/dashboard/categoria/new">aqui</a>
                  @endif
                  </div>
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