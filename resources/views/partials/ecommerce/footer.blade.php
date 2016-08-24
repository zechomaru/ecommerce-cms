<div id="footer">
    <div class="column">
        <h3>
            <img class="logo" style="width:200px; height:57px;" style="{{ $setting->logo ? null : 'width:40%' }}" src="{{ $setting->logo ? url('images/setting/' . $setting->logo) : url('assets/img/tulogo.png') }}" alt="">
        </h3>

        <p class="section address">{{ $setting->direction ? $setting->direction : null }}</p>
        <p class="section phone">Telefono: {{ $setting->phone ? $setting->phone : null }}</p>
        <p class="section fax">Fax: {{ $setting->fax ? $setting->fax : null }}</p>

        <br>
<!--<a href="/index.php?route=information/sucursales" class="button-default special">sucursales</a> -->
    </div>

    <div class="column si-ver">
        <h3>Información</h3>
        <ul>
            <li><a href="/terminos-y-condiciones">Términos y Condiciones</a></li>
            <li><a href="/acerca_de">Quiénes Somos</a></li>
            <li><a href="/informacion-de-despacho">Informacion de Despacho</a></li>
            <li><a href="/formas-de-pago">Formas de Pago</a></li>
            <li><a href="/soporte">Servicio al Cliente</a></li>
            <li><a href="/catalogo ekoline">Catálogos </a></li>

            <li><a href="/contact">Contáctanos</a></li>            
            <li><a href="/information/boletas">Boletas Electrónicas</a></li>            
        </ul>
    </div>

    <div class="column si-ver">
        <h3>Mi cuenta</h3>
        <ul>
            <li><a href="/account">Mi cuenta</a></li>
            <li><a href="/account/order">Historial de pedidos</a></li>
            <li><a href="/account/wishlist">Lista de favoritos</a></li>
            <li><a href="/account/newsletter">Boletín de noticias</a></li>
        </ul>
    </div>

    <div class="column">
        <h3>formas de pago</h3>
        <br>
        <a href="/formas-de-pago" class="">
            <img src="/assets/img/webpay.png" width="257" border="0">  
        </a>
        <br><br><br>
        <h3>Newsletter</h3>
        <label>Recibe nuestro newsletter:</label>
        <form action="/newsletter" method="POST">
          {{ csrf_field() }}
          <input type="email" class="news" placeholder="Ingresa tu e-mail">
          <input type="submit" class="button-default special" value="SUSCRIBITE">
        </form>
    </div>

</div>