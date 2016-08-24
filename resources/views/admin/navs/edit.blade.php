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
            <form role="form" action="{{ url('admin/menus/update/' . $nav->id) }}" method="POST" >
              {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group">
                  <label for="">Nombre del menu</label>
                  <input type="text" name="name" class="form-control" id="" placeholder="Nombre" value="{{ $nav->name }}">
                </div>

                <div class="form-group">
                  <label for="">Categoria</label>
                  <div>

                  @foreach(App\Models\Category::all() as $category)
                    <label for="">{{ $category->name }}</label>
                    @if(!$nav->categories == [])
                      @foreach($nav->categories as $categoryChecked)
                        @if($category->id == $categoryChecked->id)
                          <input type="checkbox" value="{{ $category->id }}"  name="category[]" class="input" checked="true">
                        @else
                          <input type="checkbox" value="{{ $category->id }}"  name="category[]" class="input" >
                        @endif
                      @endforeach
                    @else
                      <input type="checkbox" value="{{ $category->id }}"  name="category[]" class="input" >
                    @endif
                  @endforeach
                  </div>
                </div>

                <div class="form-group">
                  <label for="">Activo / inactivo</label>
                  <div class="switch">
                    <label for="checktoggle">NO
                      {{ Form::checkbox('status', 1, $nav->status ? $var = true : $var = false, array('id' => 'checktoggle')) }}
                      <span class="lever"></span>
                      Si
                    </label>
                  </div>
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