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
              <h3 class="box-title">Administrador</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" >
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="">Nombre</label>
                  <input type="text" name="name" class="form-control" id="" placeholder="Nombre">
                </div>

                <div class="form-group">
                  <label for="">Apellido</label>
                  <input type="text" name="last_name" class="form-control" id="" placeholder="Apellido">
                </div>

                <div class="form-group">
                  <label for="">Correo</label>
                  <input type="text" name="email" class="form-control" id="" placeholder="Apellido">
                </div>

                <div class="form-group">
                  <label for="">Contraseña</label>
                  <input type="password" name="password" class="form-control" id="" placeholder="">
                </div>

                <div class="form-group">
                  <label for="">Repita la Contraseña</label>
                  <input type="password" name="password_confirmation" class="form-control" id="" placeholder="">
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