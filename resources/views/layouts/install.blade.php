<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instalación</title>
<link rel="stylesheet" href="{{ url('assets/css/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/fonts.css') }}">
@yield('style')
</head>
<body class="">
    <div class="wrapper">
        @yield('content')
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
