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
        <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Menús</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tbody>
                        <tr>
                          <th>Nombre</th>
                          <th>Desscripción</th>
                          <th>Status</th>
                          <th colspan="3">Acciones</th>
                        </tr>
                          @foreach($navs as $nav)
                            <tr>
                              <td>{{ $nav->name }}</td>
                              <td>{{ $nav->description }}</td>
                              <td>
                                @if ($nav->status== 0)
                                  <span class="label label-danger">Inactivo</span>
                                  @else
                                    <span class="label label-success">Activo</span>
                                @endif
                              </td>
                              <td><a href="{{action('Admin\NavsController@show', $nav->id)}}"><span class="fa fa-eye"></span></a></td>
                              <td><a href="{{action('Admin\NavsController@edit', $nav->id)}}"><span class="fa fa-edit"></span></a></td>
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