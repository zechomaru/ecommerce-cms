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


<div id="content">
  <div class="breadcrumb">
    <a href="/">Inicio</a>» <a href="/account">Cuenta</a>» <a href="/account/edit">Editar información</a>
  </div>
   <h1>Mi información de la cuenta</h1>
   <form action="/account/edit" method="post" enctype="multipart/form-data">
     <h2>Tus detalles personales</h2>
     <div class="content">
       <table class="form">
         <tbody><tr>
           <td><span class="required">*</span> Nombre::</td>
           <td><input type="text" name="name" value="{{ Auth::guard()->user()->name }}">
             </td>
         </tr>
         <tr>
           <td><span class="required">*</span> Apellido/s:</td>
           <td><input type="text" name="lastname" value="{{ Auth::guard()->user()->last_name }}">
             </td>
         </tr>
         <tr>
           <td><span class="required">*</span> E-Mail:</td>
           <td><input type="text" name="email" value="{{ Auth::guard()->user()->email }}">
             </td>
         </tr>
         <tr>
           <td><span class="required">*</span> Teléfono:</td>
           <td><input type="text" name="telephone" value="{{ Auth::guard()->user()->phone }}">
             </td>
         </tr>
         <tr>
           <td><span class="required">*</span> Rut:</td>
           <td><input type="text" name="rut" value="{{ Auth::guard()->user()->rut }}">
           </td>
           
         </tr>
       </tbody></table>
     </div>
     <div class="buttons">
       <div class="left"><a href="http://www.gobantes.cl/index.php?route=account/account" class="button">Atrás</a></div>
       <div class="right">
         <input type="submit" value="Continuar" class="button">
       </div>
     </div>
   </form>
   </div>
@endsection