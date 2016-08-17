<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap/bootstrap.min.css') }}">
    <!-- login -->
    <link href="{{ url('assets/css/admin/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-card">
        <!-- <img src="" alt="" class="profile-img-card"> -->
        <form class="form-signin" role="form" method="POST">
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
        <input id="email" type="email" class="form-control" placeholder='Email' name="email" value="{{ old('email') }}">
        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Entrar </button>
        </form>
    </div>
</body>
</html>