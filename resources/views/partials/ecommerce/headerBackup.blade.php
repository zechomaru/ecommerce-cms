<!-- header -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-0 col-md-4">
          <img class="logo" style="{{ $setting->logo ? null : 'width:40%' }}" src="{{ $setting->logo ? url('images/setting/' . $setting->logo) : url('assets/img/tulogo.png') }}" alt="">
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-2 col-md-6">
          <nav class="menu_principal">
            <ul>
              <li><a href="/"><i class="glyphicon glyphicon-home"></i></a></li>
              @if(Auth::guard()->check())
                <li><a href="">Mi Cuenta</a></li>
                <li><a href="">Mis Pedidos</a></li>
                  <!-- <li><a href="{{ Request::segment(1) }}/logout">Logout</a></li> -->
              @else
                  <li><a href="/login">Entrar</a></li>
                  <li><a href="/register">Registrate</a></li>
              @endif
                <li><a href="">Cómo Comprar</a></li>
                <li><a href="">Sucursales</a></li>
              @if(Auth::guard()->check())
                <li><a href="/logout">Salir</a></li>
              @endif
            </ul>
          </nav>

          <div class="row hidden-xs hidden-sm">
            <div class="col-md-12">
              @if(!Auth::guard()->check())
                <p class="bienvenido">¡Bienvenido! Puedes 
                  <a href="/login">
                    iniciar sesión
                  </a>
                   o 
                   <a href="/register">
                    crear una cuenta
                   </a>
                    | 
                   <a href="#">
                    Servicio al Cliente: {{ $setting ? $setting->phone : null }}
                   </a>
                 </p>
                 @else
                  <p class="bienvenido">¡Bienvenido! {{ Auth::guard()->name }} Puedes 
                    <a href="/logout">
                      salir
                    </a>
                     o 
                     <a href="#">
                      Servicio al Cliente: {{ $setting ? $setting->phone : null }}
                     </a>
                   </p>
               @endif
            </div>
          </div>

          <div class="row hidden-xs hidden-sm" style="margin-top:20px;">
            <div class="col-md-5 col-md-offset-2">
              <input class="search" type="search" placeholder="Buscar">
            </div>
            <div class="col-md-5">
              <p class="cart">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                <span>
                  0 Item(s) - $0
                </span>
              </p>
            </div>
          </div>
        </div>

        <div class="col-xs-12 header_end hidden-md  hidden-lg">
          <a href="#">
            <i class="glyphicon glyphicon-search"></i>
          </a>
          <a href="#">
            <i class="glyphicon glyphicon-shopping-cart"></i>
          </a>
        </div>

      </div>
    </div>
  </header>
<!-- end header -->