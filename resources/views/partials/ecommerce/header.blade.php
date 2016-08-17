<!-- header -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-0 col-md-4">
          <img class="logo" src="{{ url('images/setting/' . $setting->logo) }}" alt="">
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
                  Servicio al Cliente: 26900000
                 </a>
               </p>
            </div>
          </div>

          <div class="row hidden-xs hidden-sm ">
            <div class="col-md-6">
              <input class="search" type="search" placeholder="Buscar">
            </div>
            <div class="col-md-6">
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