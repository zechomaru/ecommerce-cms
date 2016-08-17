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
              <h3 class="box-title">Configuración de la pagina</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/dashboard/configuracion/update') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="">Titulo de la pagina</label>
                  <input type="text" name="title" class="form-control" id="" placeholder="Titulo" value="{{ $setting->title }}">
                </div>

                <div class="form-group">
                  <label for="">País</label>
                  <select name="country" id="" class="form-control">
                  @for ($i = 0; $i <= sizeof($countries) -1; $i++)
                    @if ( $countries[$i] == $setting->country)
                      <option value="{{ $setting->country }}" selected>{{ $setting->country }}</option>
                        @continue
                    @endif
                      <option value="{{ $countries[$i] }}" >{{ $countries[$i] }}</option>
                  @endfor
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Dirección</label>
                  <input type="text" name="direction" class="form-control" id="" placeholder="Dirección" value="{{ $setting->direction }}">
                </div>

                <div class="form-group">
                  <label for="">Telefóno</label>
                  <input type="text" name="phone" class="form-control" id="" placeholder="Telefóno" value="{{ $setting->phone }}">
                </div>

                <div class="form-group">
                  <label for="">Imagen ico</label>
                  <input type="file" class="form-control" name="fileIco" >
                </div>

                <div class="form-group">
                  <label for="">Logo</label>
                  <input type="file" class="form-control" name="fileLogo" >
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