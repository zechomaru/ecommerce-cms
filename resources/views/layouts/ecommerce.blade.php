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
        ul#nav li:last-child ul.subs li ul {
            display: block !important;
        }
    </style>
</head>
    @include('partials.ecommerce.header')
    @include('partials.ecommerce.nav')
    <div id="container">
    <div id="notification_container">
        <div id="notification"></div>    
    </div><style>

    </style>



        @yield('content')
        @include('partials.ecommerce.footer')
    </div>
    </div>

</body>
</html>