@extends('layouts.ecommerce')

@section('content')

<section class="register">
      <div class="container">
        <div class="row">
          <div class="col-md-3 hidden-xs hidden-sm ">
            saadsds<
          </div>
          <div class="col-md-9 col-xs-12 col-sm-12">
              <h1>Registro de cuenta</h1>
              <p>Si ya tienes una cuenta con nosotros, por favor inicia sesion en la <a href="/login">página de acceso</a>.</p>
              <form  method="POST">
                {{ csrf_field() }}
                @foreach ($errors->all() as $error)
                      <li style="color: #FF2929;">{{ $error }}</li>
                  @endforeach
                <h1>Tus datos personales</h1>
                <div class="marco">
                  <div class="row {{ $errors->has('name') ? ' has-error' : '' }}">
                      <div class="col-md-3">
                          <p><span>*</span> Nombre:</p>
                      </div>
                      <div class="col-md-9">
                          <input type="text" name="name" value="{{ old('name') }}">
                      </div>
                  </div>

                  <div class="row {{ $errors->has('last_name') ? ' has-error' : '' }}">
                      <div class="col-md-3">
                          <p><span>*</span> Apellido/s:</p>
                      </div>
                      <div class="col-md-9">
                          <input type="text" name="last_name" value="{{ old('last_name') }}">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-3">
                          <p><span></span> Rut:</p>
                      </div>
                      <div class="col-md-9">
                          <input type="text" name="rut" value="{{ old('rut') }}">
                      </div>
                  </div>

                  <div class="row {{ $errors->has('email') ? ' has-error' : '' }}">
                      <div class="col-md-3">
                          <p><span>*</span> E-Mail:</p>
                      </div>
                      <div class="col-md-9">
                          <input type="email" name="email" value="{{ old('email') }}">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-3">
                          <p><span></span> Teléfono:</p>
                      </div>
                      <div class="col-md-9">
                          <input type="text" name="phone" value="{{ old('phone') }}">
                      </div>
                  </div>

                </div>

                <h1>Tu dirección</h1>
                <div class="marco">

                  <div class="row">
                      <div class="col-md-3">
                          <p>Compañia:</p>
                      </div>
                      <div class="col-md-9">
                          <input type="text" name="company" value="{{ old('company') }}">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-3">
                          <p>RUT de facturación:</p>
                      </div>
                      <div class="col-md-9">
                          <input type="text" name="rut_invoce" value="{{ old('rut_invoce') }}">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-3">
                          <p><span>*</span>Dirección 1:</p>
                      </div>
                      <div class="col-md-9">
                          <input type="text" name="direction" value="{{ old('direction') }}">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-3">
                          <p>Dirección 2:</p>
                      </div>
                      <div class="col-md-9">
                          <input type="text" name="direction_ext" value="{{ old('direction_ext') }}">
                      </div>
                  </div>

                  <!-- <div class="row">
                      <div class="col-md-3">
                          <p><span>*</span> País:</p>
                      </div>
                      <div class="col-md-9">
                          <select name="" id="">
                            <option value=""></option>
                          </select>
                      </div>
                  </div> -->

                  <!-- <div class="row">
                      <div class="col-md-3">
                          <p><span>*</span> Region / Estado:</p>
                      </div>
                      <div class="col-md-9">
                          <select name="" id="">
                            <option value=""></option>
                          </select>
                      </div>
                  </div> -->

                  <!-- <div class="row">
                      <div class="col-md-3">
                          <p><span>*</span> Ciudad:</p>
                      </div>
                      <div class="col-md-9">
                          <input type="text">
                      </div>
                  </div>
 -->
                  <!-- <div class="row">
                      <div class="col-md-3">
                          <p><span>*</span> Comuna:</p>
                      </div>
                      <div class="col-md-9">
                          <select name="" id="">
                            <option value=""></option>
                          </select>
                      </div>
                  </div> -->

                  <!-- <div class="row">
                      <div class="col-md-3">
                          <p><span>*</span> Codigo postal:</p>
                      </div>
                      <div class="col-md-9">
                          <input type="text">
                      </div>
                  </div> -->

                </div>

                <h1>Tu contraseña</h1>
                <div class="marco">

                  <div class="row {{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-3">
                        <p><span>*</span> Contraseña:</p>
                    </div>
                    <div class="col-md-9">
                        <input type="password" name="password">
                    </div>
                  </div>

                  <div class="row {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <div class="col-md-3">
                        <p><span>*</span> Confirma contraseña:</p>
                    </div>
                    <div class="col-md-9">
                        <input type="password" name="password_confirmation">
                    </div>
                  </div>

                </div>

                <h1>Boletín de noticias</h1>
                <div class="marco">
                  <div class="row">
                    <div class="col-md-3">
                      <p>Suscripción: <input type="checkbox" name="newsletter" value="1"></p>
                    </div>
                  </div>
                </div>
                <p>He leido y acepto las <a href="">Privacidad</a> <input type="checkbox" name="validate"> <input type="submit" value="CONTINUAR"></p>
            </form>

          </div>
      </div>
  </div>
</section>
@endsection
