@extends('layouts.ecommerce')
@section('title')
    <title>ddd</title>
@endsection


@section('content')
<div id="column-left" class="si-ver">
  <div class="box account">
    <div class="box-heading">Cuenta</div>
    <div class="box-content">
      <ul>
        <li><a href="/account">Mi cuenta</a></li>
        <li><a href="/account/edit">Editar cuenta</a></li>
        <li><a href="/account/password">Contraseña</a></li>
        <li><a href="/account/address">Libreta de Direcciones</a></li>
        <li><a href="/account/wishlist">Lista de favoritos</a></li>
        <li><a href="/account/order">Historial de pedidos</a></li>
        <li><a href="/account/newsletter">Boletín de noticias</a></li>
        <li><a href="/logout">Salir</a></li>
      </ul>
    </div>
  </div>
</div>


  <div id="content">  <div class="breadcrumb">
          <a href="/">Inicio</a>
           » <a href="/account">Cuenta</a>
        </div>
    <!--<h1>Mi cuenta</h1>-->
    <!--<h2>Mi cuenta</h2>-->
    <h2>Mi cuenta</h2>
    <div class="content account">
      <ul>
        <li><a href="/account/edit">Editar tu información de cuenta</a></li>
        <li><a href="/account/password">Cambia tu contraseña</a></li>
        <li><a href="/account/address">Modificar tu libreta de direcciones</a></li>
        <li><a href="/account/wishlist">Modificar mi lista de favoritos</a></li>
      </ul>
    </div>
    <h2>Mis pedidos</h2>
    <div class="content account">
      <ul>
        <li><a href="/account/order">Ver mi historial de compras</a></li>
  <!--      <li><a href="http://www.gobantes.cl/index.php?route=account/download">Descargas</a></li>-->
        <!--      <li><a href="http://www.gobantes.cl/index.php?route=account/return">Ver tus peticiones de devolución</a></li>-->
  <!--      <li><a href="http://www.gobantes.cl/index.php?route=account/transaction">Tus transacciones</a></li>-->
  <!--      <li><a href="http://www.gobantes.cl/index.php?route=account/recurring">Pagos recurrentes</a></li>-->
      </ul>
    </div>
    <h2>Boletín de noticias</h2>
    <div class="content account">
      <ul>
        <li><a href="/account/newsletter">Suscribirse / Darse de baja al Boletín de Noticias</a></li>
      </ul>
    </div>
    </div>
@endsection