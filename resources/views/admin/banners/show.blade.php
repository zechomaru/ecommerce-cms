@extends('layouts.admin')

@section('title')
    <title>Banner {{ $banner->name }}</title>
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
        <div class="col-xs-6 col-xs-offset-3">
                  <div class="box box-primary">
                    <div class="box-header">
                      <h3 class="">{{ $banner->name }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <img src="{{ url('images/banners/' . $banner->image) }}" alt="" style="width: 400px;">
                      <h3>Descripción</h3>
                      <p>{{ $banner->description }}</p>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <a href="{{action('Admin\BannersController@edit', $banner->id)}}"><span class="fa fa-edit"> Editar</span></a>
                      <span> - </span>
                      <a href=""><span class="fa fa-remove"> Eliminar</span></a>
                    </div>
                  </div>
                  <!-- /.box -->
                </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection