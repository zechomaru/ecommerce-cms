@extends('layouts.admin')

@section('title')
    <title>Categorias</title>
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
        <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Categorias</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tbody>
                        <tr>
                          <th>Nombre</th>
                          <th>Desscripción</th>
                          <th colspan="3">Acciones</th>
                        </tr>
                          @foreach($categories as $category)
                            <tr>
                              <td>{{ $category->name }}</td>
                              <td>{{ $category->description }}</td>
                              <td><a href="{{action('Admin\CategoriesController@show', $category->id)}}"><span class="fa fa-eye"></span></a></td>
                              <td><a href="{{action('Admin\CategoriesController@edit', $category->id)}}"><span class="fa fa-edit"></span></a></td>
                              <td><a href=""><span class="fa fa-remove"></span></a></td>

                          </tr>
                        @endforeach
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection