@extends('layouts.ecommerce')

@section('content')
<div id="column-left" class="si-ver">
  <div class="box account">
    <div class="box-heading">Cuenta</div>
    <div class="box-content">
      <ul>
        <li><a href="/login">Inicio de sesión</a> / <a href="/register">Registro</a></li>
        <li><a href="/account/forgotten">Contraseña olvidada</a></li>
        <li><a href="/account">Mi cuenta</a></li>
        <li><a href="/account/address">Libreta de Direcciones</a></li>
        <li><a href="/account/wishlist">Lista de favoritos</a></li>
        <li><a href="/account/order">Historial de pedidos</a></li>
        <li><a href="/account/newsletter">Boletín de noticias</a></li>
      </ul>
    </div>
  </div>
</div>

  <div id="content">
    <div class="breadcrumb">
      <a href="/">Inicio</a>» <a href="/account">Cuenta</a>» <a href="/login">Inicio de sesión</a>
    </div>
    <h1>Inicio sesión de tu cuenta</h1>
    <div class="login-content">
      <div class="right">
        <h2>Cliente frecuente</h2>
        <form method="post" enctype="multipart/form-data">
          <div class="content">
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
            <b>Dirección e-mail:</b><br>
            <input type="email" name="email">
            <br>
            <br>
            <b>Contraseña:</b><br>
            <input type="password" name="password" value="">
            <br>
            <a href="/account/forgotten">Contraseña olvidada</a><br>
            <br>
            <input type="submit" value="Login" class="button">
            </div>
        </form>
      </div>
      <div class="left">
        <h2>Cliente nuevo</h2>
        <div class="content">
          <p><b>Registrar cuenta</b></p>
          <p>Creando una cuenta podrás comprar más rapidamente, estar al día en los estados de los pedidos, y ver los registros de pedidos anteriores.</p>
          <a href="/register" class="button">Continuar</a>
        </div>
      </div>
    </div>
    </div>
@endsection
