<div id="header_container">
    <div id="header">
        <div id="logo">
            <a href="/">
                @if($setting->logo)
                    <img border="0" src="{{ url('images/setting/' . $setting->logo) }}" alt="">
                @endif
            </a>
        </div>
    <div id="account-menu">
        <ul>
            <li><a href="/" class="home-icon"></a></li>
            <li><a href="/account">Mi Cuenta</a></li>
            <li><a href="/account/order">Mis Pedidos</a></li>
            <li><a href="/como-comprar">Cómo Comprar</a></li>                    
            <li><a href="/index.php?route=information/sucursales">Sucursales</a></li>
            <!--<li><a href="/soporte">Servicio al Cliente: 2-690-0075</a></li>-->
            <div class="clear-fix"></div>
        </ul>
    <div class="clearfix2"></div>
    <p>¡Bienvenido! Puedes <a href="/login">iniciar sesión</a> o <a href="/register">crear una cuenta</a> | <a href="/soporte">Servicio al Cliente: 26900000</a></p>       
        <center class="responsive-content">
            <a id="toggle-search">
              <i class="fa fa-search"></i>
            </a>
            <a href="/index.php?route=checkout/cart" id="toggle-cart">
              <i class="fa fa-shopping-cart"></i>
            </a>
            <a href="/index.php?route=account/account" id="toggle-user">
              <i class="fa fa-user"></i>
            </a>
            <div class="clearfix2"></div>
        </center>
    </div>
            
    <div id="dollar">
      <span class="dolar" style="display: inline;">Dolar&nbsp;$660,94</span><span class="euro" style="display: none;">Euro&nbsp;$747,84</span><span class="uf" style="display: none;">Uf&nbsp;$26.193,90</span><span class="utm" style="display: none;">Utm&nbsp;$45.907</span>                               
    </div>

    <div id="search">
        <input type="text" name="search" placeholder="Buscar" value="" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">                
    </div>
            
            
    <div id="cart">
        <a href="/index.php?route=checkout/cart" id="cart-total">0 item(s) - $0</a>
    </div>            

<!--            <div id="search">
              <div class="button-search"></div>
              <input type="text" name="search" placeholder="Buscar" value="" />
            </div>-->
        </div>
    </div>