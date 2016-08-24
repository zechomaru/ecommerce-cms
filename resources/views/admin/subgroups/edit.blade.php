@extends('layouts.admin')

@section('title')
    <title>Editar Sub-Grupo</title>
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
              <h3 class="box-title">Sub-Grupo</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/sub-grupo/update/' . $subgroup->id) }}" method="POST" >
              {{ csrf_field() }}
              <div class="box-body">
                @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="">Nombre</label>
                  <input type="text" name="name" class="form-control" id="" placeholder="Nombre" value="{{ $subgroup->name }}">
                </div>

                <div class="form-group">
                  <label for="">Descripción</label>
                  <input type="text" name="description" class="form-control" id="" placeholder="Nombre" value="{{ $subgroup->description }}">
                </div>


                <div class="form-group">
                  <label for="">Categoria</label>
                  <?php 
                    $categories = App\Models\Category::get();
                   ?>
                  <select name="category_id" id="category_id">
                    @foreach($categories as $category)
                      @if( $subgroup->category_id == $category->id)
                        <option value="{{ $category->id }}" selected="true">{{ $category->name }}</option>
                        @continue
                      @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>

                <?php 
                  $grupos = App\Models\Group::where('category_id' , '=', $subgroup->category->id)->get();
                 ?>
                <div class="form-group {{ $errors->has('grupo') ? ' has-error' : '' }}">
                  <label for="">Grupos</label>
                  <select name="group_id" id="select_groups" class="select_groups">
                    @foreach($grupos as $grupo)
                      @if( $grupo->id == $subgroup->group->id)
                        <option value="{{ $grupo->id  }}" selected="true">{{ $grupo->name }}</option>
                        @continue
                      @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endif
                    @endforeach
                  </select>
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