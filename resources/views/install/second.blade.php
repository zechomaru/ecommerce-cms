@extends('layouts.install')

@section('style')
<style>
  .box_flex{
    display: flex;
    height: 100vh;
    align-items: center;
  }
  .box_flex .box_center{
    margin: 0 auto;
    text-align: center;
  }
  .box_flex .box_center h1{
    font-family: 'LatoBlackItalic', sans-serif;
    font-weight: bold;
    color: #666;
    letter-spacing: 2px;
    text-shadow: 1px 7px 9px #d0d0d0;
  }
  .box_flex .box_center a{
    font-family: 'LatoBlackItalic', sans-serif;
    font-weight: bold;
    margin-top: 5rem;
  }
  .form-control:focus {
      border-color: #5cb85c;
      outline: 0;
      -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(92,184,92,0.6);
      box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(92, 184, 92, 0.6);
  }
</style>
@endsection
  @section('content')
    <div class="box_flex">
        <div class="box_center">
            <h2>Rellene el formulario</h2>
            <span>Los campos con * son obligatorios</span>


            <form class="form-horizontal" role="form" method="POST" >
                {{ csrf_field() }}
                @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Primer nombre">
                </div>

                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Primer apellido">
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Correo electrónico">
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password"  placeholder="Contraseña">
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"  placeholder="Repita la Contraseña">
                </div>



                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-btn fa-user"></i> Register
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>