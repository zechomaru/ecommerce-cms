@extends('layouts.admin')

@section('title')
    <title>Sliders</title>
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
                      <h3 class="box-title">Sliders</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tbody>
                        <tr>
                          <th>Nombre</th>
                          <th>status</th>
                          <th colspan="5">Acciones</th>
                        </tr>
                          @foreach($sliders as $slider)
                            <tr>
                              <td>{{ $slider->name }}</td>
                              <td>
                                @if ($slider->status== 0)
                                  <span class="label label-danger">Inactivo</span>
                                  @else
                                    <span class="label label-success">Activo</span>
                                @endif
                              </td>
                              @if($slider->image)
                                <td><img src="{{ url('images/sliders/' . $slider->image) }}" alt="" style="width: 60px;"></td>
                              @else
                                <td></td>
                              @endif
                              <td><a href="{{action('Admin\SlidersController@getServerImagesPage', $slider->id)}}"><span class="fa fa-image"></span></a></td>
                              <td><a href="{{action('Admin\SlidersController@show', $slider->id)}}"><span class="fa fa-eye"></span></a></td>
                              <td><a href="{{action('Admin\SlidersController@edit', $slider->id)}}"><span class="fa fa-edit"></span></a></td>
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