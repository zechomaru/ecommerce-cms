@extends('layouts.ecommerce')

@section('content')


<section class="login">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            
          </div>
          <div class="col-md-9">
              <h1>Inicio sesión de tu cuenta</h1>
              <div class="row">
                  <div class="col-md-6 login_registro">
                      <h2>Cliente nuevo</h2>
                      <div class="marco">
                          <strong class="title">Registrar cuenta</strong>
                          <p class="contenido">Creando una cuenta podrás comprar más rapidamente, estar al día en los estados de los pedidos, y ver los registros de pedidos anteriores.</p>
                          <a href="/register" class="">Continuar</a>
                      </div>
                  </div>
                  <div class="col-md-5 login_fields col-md-offset-1">
                      <h2>Cliente frecuente</h2>
                      <div class="marco">
                      <form method="POST">
                        {{ csrf_field() }}
                        @if ($errors->has('email'))
                            <div class="alert alert-danger" id="success-alert" role="alert">
                                {{ $errors->first('email') }}
                            </div>
                        @elseif ($errors->has('password'))
                            <div class="alert alert-danger" id="success-alert" role="alert">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                        <label for="email">Dirección e-mail:</label>
                        <input type="email" name="email" id="email">
                        <label for="email" value="{{ old('email') }}">Contraseña:</label>
                        <input type="password" name="password" id="email">
                        <a href="">Contraseña olvidada</a>
                        <input type="submit" value="LOGIN">
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
