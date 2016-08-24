        <!-- footer -->

          <footer class="footer">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12  col-sm-4 col-md-3 col-lg3">
                      <div class="row">
                        <div class="col-xs-12">
                          <!--logo -->
                          <img class="logo" style="{{ $setting->logo ? null : 'width:40%' }}" src="{{ $setting->logo ? url('images/setting/' . $setting->logo) : url('assets/img/tulogo.png') }}" alt="">
                        </div>
                        <div class="col-xs-12 border_top">
                          <p><i class="glyphicon glyphicon-user"></i>{{ $setting->direction ? $setting->direction : null }}</p>
                        </div>
                        <div class="col-xs-12 border_top">
                          <p><i class="glyphicon glyphicon-phone"></i> Telefono: {{ $setting->phone ? $setting->phone : null }}</p>
                        </div>
                        <div class="col-xs-12 border_top">
                          <p><i class="glyphicon glyphicon-phone"></i> Fax: {{ $setting->fax ? $setting->fax : null }}</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg3 hidden-xs hidden-sm">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3>INFORMACIÓN</h3>
                        </div>
                        <div class="col-xs-12">
                          <ul>
                            <li><a href="#">Términos y Condiciones</a></li>
                            <li><a href="#">Quíenes Somos</a></li>
                            <li><a href="#">Información de Despacho</a></li>
                            <li><a href="#">Formas de Pago</a></li>
                            <li><a href="#">Servicio al Cliente</a></li>
                            <li><a href="#">Catálogos</a></li>
                            <li><a href="#">Contáctanos</a></li>
                            <li><a href="#">Boleta Eletrónicas</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg3 hidden-xs ">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3>MI CUENTA</h3>
                        </div>
                        <div class="col-xs-12">
                          <ul>
                            <li><a href="#">Mi cuenta</a></li>
                            <li><a href="#">Historial de pedidos</a></li>
                            <li><a href="#">Lista de favoritos</a></li>
                            <li><a href="#">Boletín de noticias</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg3">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3>FORMAS DE PAGO</h3>
                        </div>
                        <div class="col-xs-12">
                          <img src="/assets/img/webpay.png" alt="">
                        </div>
                        <div class="col-xs-12">
                          <h3>NEWSLETTER</h3>
                        </div>
                        <div class="col-xs-12">
                          <p>
                            <i class="glyphicon glyphicon-mail"></i> 
                          Recibe nuestro newsletter:
                          </p>
                          <form action="/newsletter" method="POST">
                            {{ csrf_field() }}
                            <input type="email" placeholder="Ingresa tu e-mail">
                            <input type="submit" value="SUSCRIBITE">
                          </form>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
            
          </footer>

        <!-- end footer -->
