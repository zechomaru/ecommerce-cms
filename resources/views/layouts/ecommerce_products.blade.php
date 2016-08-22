<!DOCTYPE html>
<html lang="es">
<head>
<?php 
    $setting = App\Models\Setting::first();
 ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    @include('partials.ecommerce.head')
    <style>
        @if( Request::is( '/login' ) )
            .content {
              background-color: red;
              background-image: none; }
        @endif
        .has-error p{
            color: #FF2929;
        }

    </style>
</head>
    @include('partials.ecommerce.header')
    @include('partials.ecommerce.nav')
    <div class="container content">
    @yield('content')
    @include('partials.ecommerce.footer')
    </div>
    <!-- jQuery 2.2.3 -->
    <script src="{{ url('assets/js/jquery-2.1.4.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('assets/js/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ url('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <script>
     //deja el evento de abrir el menu de la barra lateral con Click en vez de hover
    $('.toggle-menu').click(function(){
        $(this).next('ul').slideToggle(500);
    });
    $('.arrowR ul li ul li a').each(function(index) {
        var clase = $(this).hasClass('active');
        if(clase == true){
            $(this).closest('ul').show();
        }
    });
        $('#toggle-menu').click(function(e){
        $(this).toggleClass('active-navbar');
        $('#nav').slideToggle(400);
    });
    </script>
</body>
</html>