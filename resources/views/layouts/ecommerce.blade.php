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
        @if( Request::is( 'login' ) )
            .content {
              background-color: #fff;
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
    @if( Request::is( 'login') || Request::is( 'register' ))
    @else
        @include('partials.ecommerce.carousel')
        @include('partials.ecommerce.banners')
    @endif
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
</body>
</html>