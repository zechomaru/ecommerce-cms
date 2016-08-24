@extends('layouts.ecommerce')
@section('title')
    <title>ddd</title>
@endsection


@section('content')
  <div id="content" class="home">

  <!-- slider -->
  <?php 
      $slider = App\Models\Slider::where('status',  '=', '1')->firstOrFail();
   ?>
@if( $slider->status == 1)

  <div class="slideshow  si-ver ">
    <div class="bx-wrapper" style="max-width: 100%;">
      <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 348px;">
        <ul class="bxslider" style="width: 915%; position: relative; transition-duration: 0s; transform: translate3d(-2224px, 0px, 0px);">
          @foreach(App\Models\ImageSlider::where('slider_id', '=', $slider->id)->get() as $imageSlider)
            <li style="float: left; list-style: none; position: relative; width: 1112px;" class="bx-clone">
              <img src="{{url('/images/full_size/' . $imageSlider->filename)}}" alt="" border="0">
           </li>
          @endforeach
          <!-- <li style="float: left; list-style: none; position: relative; width: 1112px;">
            <a href="">
              <img src="/assets/img/118x350.jpg" alt="" border="0">
            </a>
          </li> -->

          </ul>
        </div>
      <!-- <div class="bx-controls bx-has-pager">
        <div class="bx-pager bx-default-pager">
          <div class="bx-pager-item">
            <a href="" data-slide-index="0" class="bx-pager-link">1</a>
          </div>
          <div class="bx-pager-item">
            <a href="" data-slide-index="1" class="bx-pager-link active">2</a>
          </div>
          <div class="bx-pager-item">
            <a href="" data-slide-index="2" class="bx-pager-link">3</a>
          </div>
        </div>
      </div> -->

    </div>
  </div>
  <!-- end slider -->

   
  <div class="clear10 no-ver"></div>

  <div class="slideshow  no-ver">
    <div class="bx-wrapper" style="max-width: 100%;">
      <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 87px;">
        <ul class="bxslider" style="width: 915%; position: relative; transition-duration: 0s; transform: translate3d(-554px, 0px, 0px);">
          <li style="float: left; list-style: none; position: relative; width: 277px;" class="bx-clone">
            <img src="/assets/img/118x350.jpg" alt="Legrand" border="0">
          </li>
          <li style="float: left; list-style: none; position: relative; width: 277px;">
            <a href="">
              <img src="/assets/img/118x350.jpg" alt="" border="0">
            </a>
          </li>

            </ul>
            </div>
            <div class="bx-controls bx-has-pager">
            <div class="bx-pager bx-default-pager">
            <div class="bx-pager-item">
            <a href="" data-slide-index="0" class="bx-pager-link">1</a>
            </div>
            <div class="bx-pager-item">
            <a href="" data-slide-index="1" class="bx-pager-link active">2</a>
            </div>
            <!-- <div class="bx-pager-item">
            <a href="" data-slide-index="2" class="bx-pager-link">3</a>
            </div>
            <div class="bx-pager-item">
            <a href="" data-slide-index="3" class="bx-pager-link">4</a>
            </div>
            <div class="bx-pager-item">
            <a href="" data-slide-index="4" class="bx-pager-link">5</a>
            </div>
            <div class="bx-pager-item">
            <a href="" data-slide-index="5" class="bx-pager-link">6</a>
            </div>
            <div class="bx-pager-item">
            <a href="" data-slide-index="6" class="bx-pager-link">7</a>
            </div> -->
            </div>
            </div>

            </div>
  </div>
@endif
   

  <div id="menu-md" class="no-ver sliding-menu" style="height: 0px;"><div class="sliding-menu-wrapper" style="width: 1512px;"><ul id="menu-panel-twq5k" class="menu-panel-root" style="width: 216px;"> 
                         
          <li>
              <a href="#menu-panel-yx0sz" class="nav">Iluminación</a>
                          
                      </li>
                         
          <li>
              <a href="#menu-panel-w9toa" class="nav">Canalización</a>
                          
                      </li>
                         
          <li>
              <a href="#menu-panel-f4wwh" class="nav">Conductores eléctricos</a>
                          
                      </li>
                         
          <li>
              <a href="#menu-panel-a5olt" class="nav">Control y potencia</a>
                          
                      </li>
                         
          <li>
              <a href="#menu-panel-schum" class="nav">Ferretería eléctrica</a>
                          
                      </li>
                         
          <li>
              <a href="#menu-panel-mmonj" class="nav">Domiciliario, telefonía y computación</a>
                          
                      </li>
          </ul><ul id="menu-panel-yx0sz" class="menu-panel" style="width: 216px;"><a class="back" href="#menu-panel-back"></a>
                  <li class="category-name">Iluminación</li>
                              
                  <li>
                      <a href="http://www.gobantes.cl/iluminacion/lamparas">
                      Ampolletas                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/iluminacion/aplicaciones-especiales">
                      Aplicaciones especiales                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/iluminacion/ballast-y-accesorios">
                      Balastos y accesorios                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/iluminacion/luminarias-de-emergencia">
                      Equipos de emergencia                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/iluminacion/foco-empotrables">
                      Focos                     </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/iluminacion">
                      Led                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/iluminacion/luminarias-alumbrado-publico">
                      Luminarias de alumbrado público                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/iluminacion/luminarias-fluorecentes">
                      Luminarias fluorescentes                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/iluminacion/luminarias-industriales">
                      Luminarias industriales                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/iluminacion/proyectores-de-area">
                      Proyectores                     </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/iluminacion/sensores-de-movimiento-gral">
                      Sensores de movimiento                    </a>
                  </li>

                          </ul><ul id="menu-panel-w9toa" class="menu-panel" style="width: 216px;"><a class="back" href="#menu-panel-back"></a>
                  <li class="category-name">Canalización</li>
                              
                  <li>
                      <a href="http://www.gobantes.cl/canalizacion/abrazaderas">
                      Abrazaderas                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/canalizacion/boquillas-contratuercas">
                      Boquillas y contratuercas                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/canalizacion/canalizaciones-efapel">
                      Canalizaciones EFAPEL                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/canalizacion/condulets">
                      Condulets                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/canalizacion/conectores-prensaestopa-uniones">
                      Conectores, prensas-estopas y uniones                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/canalizacion/coplas-cajas">
                      Coplas y cajas                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/canalizacion/hilos-tuercas">
                      Hilos y tuercas                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/canalizacion/tuberias-electricas-accesorios">
                      Tuberias eléctricas y accesorios                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/canalizacion/tubos-flexibles-metalicos">
                      Tubos flexibles metálicos                    </a>
                  </li>

                          </ul><ul id="menu-panel-f4wwh" class="menu-panel" style="width: 216px;"><a class="back" href="#menu-panel-back"></a>
                  <li class="category-name">Conductores eléctricos</li>
                              
                  <li>
                      <a href="http://www.gobantes.cl/conductores-electricos/conductores-domiciliario">
                      Conductores  domiciliarios                                      </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/conductores-electricos/conductores-industriales">
                      Conductores industriales                    </a>
                  </li>

                          </ul><ul id="menu-panel-a5olt" class="menu-panel" style="width: 216px;"><a class="back" href="#menu-panel-back"></a>
                  <li class="category-name">Control y potencia</li>
                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/armarios-tableros-cajas">
                      Armarios, tableros y cajas                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/bornes-conexion-ekoline">
                      Bornes de conexión EKOLINE                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/botoneras-pilotos-pulsadores-ekoline">
                      Botoneras, pilotos y pulsadores EKOLINE                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/contactores">
                      Contactores                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/diferenciales">
                      Diferenciales                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/enchufes-industriales">
                      Enchufes industriales                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/fusibles-aparelec">
                      Fusibles APARELEC                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/guardamotores">
                      Guardamotores                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/interruptores-automaticos">
                      Interruptores automáticos                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/interruptores-caja-moldeada">
                      Interruptores caja moldeada                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/interruptores-horario-orbis">
                      Interruptores horario                     </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/interruptores-fin-de-carrera-microswitsh-ekoline">
                      Interruptores, fin de carrera y microswitchs ...                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/reles-liquidos-orbis">
                      Relés líquidos ORBIS                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/reles-temporizadores-eaton">
                      Relés temporizadores EATON                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/reles-temporizadores-orbis">
                      Relés temporizadores ORBIS                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/control-y-potencia/reles-termicos">
                      Relés térmicos                    </a>
                  </li>

                          </ul><ul id="menu-panel-schum" class="menu-panel" style="width: 216px;"><a class="back" href="#menu-panel-back"></a>
                  <li class="category-name">Ferretería eléctrica</li>
                              
                  <li>
                      <a href="http://www.gobantes.cl/ferreteria-electrica/conexiones-aislaciones">
                      Conexiones y aislaciones                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/ferreteria-electrica/escalas">
                      Escalas                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/ferreteria-electrica/fijaciones">
                      Fijaciones                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/ferreteria-electrica/ferreteria-generador">
                      Generador                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/ferreteria-electrica/ferreteria-herramientas">
                      Herramientas                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/ferreteria-electrica/instrumentos-de-medicion">
                      Instrumentos de medición                    </a>
                  </li>

                          </ul><ul id="menu-panel-mmonj" class="menu-panel" style="width: 216px;"><a class="back" href="#menu-panel-back"></a>
                  <li class="category-name">Domiciliario, telefonía y computación</li>
                              
                  <li>
                      <a href="http://www.gobantes.cl/domicilio-telefonia-computacion/adaptadores">
                      Adaptadores                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/domicilio-telefonia-computacion/aisladores-de-loza">
                      Aisladores de loza                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/domicilio-telefonia-computacion/alargadores">
                      Alargadores                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/domicilio-telefonia-computacion/audio-video">
                      Audio y video                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/domicilio-telefonia-computacion/bases-de-loza">
                      Bases de loza                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/domicilio-telefonia-computacion/campanillas-ding-dong">
                      Campanillas y ding-dongs                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/domicilio-telefonia-computacion/enchufes-y-hembras-volantes-domiciliario">
                      Enchufes y hembras volantes domiciliarios                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/domicilio-telefonia-computacion/interruptor-de-presion">
                      Interruptor de presión                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/domicilio-telefonia-computacion/portalamparas-loza">
                      Portalámparas                     </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/domicilio-telefonia-computacion/seguros-aereos-de-loza">
                      Seguros aéreos de loza                    </a>
                  </li>

                              
                  <li>
                      <a href="http://www.gobantes.cl/domicilio-telefonia-computacion/varillas-anti-palomas-adhesivo">
                      Varillas anti-palomas y adhesivo                    </a>
                  </li>

                          </ul></div></div>

  <div class="clear10 no-ver"></div>
<?php 
  $banners = App\Models\Banner::take(3)->get();
  $i = 0;
 ?>
  @if(!$banners->isEmpty())
    @foreach($banners as $banner)
      <div id="banner{{$i}}" class="banner">
        <div style="display: block;">
          <img style="width:360px; height:147px; " src="{{ url('/images/banners/' . $banner->image) }}" alt="" title="" class="img-responsive inline-block">
        </div>
      </div>
      <?php 
        $i++;
       ?>
    @endforeach
  @endif
      
          
      <div class="clear-fix clearfix" style="display:block"></div>

      
      <div id="column-left" class="offices">

          <div class="box">
              <div class="box-heading">Sucursales</div>
              <div class="box-content">

                  <!-- <div id="iquique" class="office" style="display: none; overflow: hidden;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/iquique.jpg">
                      <span>Iquique, Sotomayor 2315<br>Fono: (56-57) 242 5445</span>
                  </div>

                  <div id="antofagasta" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/antofagasta.jpg">
                      <span>Antofagasta, Av. Nicolás Tirado 222<br>Fono: (56-55) 227 9754</span>
                  </div>

                  <div id="calama" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/calama.jpg">
                      <span>Calama, Ecuador 2013<br>Fono: (56-55) 234 3996</span>
                  </div>

                  <div id="copiapo" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/copiapo.jpg">
                      <span>Copiapo, Av. Los Carreras 2024<br>Fono: (56-52) 222 0468</span>
                  </div>

                  <div id="la-serena" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/la-serena.jpg">
                      <span>La Serena, Balmaceda 2001<br>Fono: (56-51) 221 4443</span>
                  </div>

                  <div id="vina-del-mar" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/vina-del-mar.jpg">
                      <span>Viña del Mar, Limache 1602<br>Fono: (56-32) 263 1628</span>
                  </div>

                  <div id="stgo-casa-matriz" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/stgo-casa-matriz.jpg">
                      <span>Santiago Casa Matriz, Av. Matta 1195<br>Fono: (56-2) 2690 0000</span>
                  </div>

                  <div id="stgo-maipu" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/stgo-maipu.jpg">
                      <span>Santiago Maipú, Av. Pajaritos 757<br>Fono: (56-2) 2532 3146</span>
                  </div>

                  <div id="stgo-plaza-egana" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/stgo-plaza-egana.jpg">
                      <span>Santiago Plaza Egaña, Av. Egaña 354<br>Fono: (56-2) 2277 4868</span>
                  </div>

                  <div id="stgo-la-florida" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/stgo-la-florida.jpg">
                      <span>Santiago la Florida, Av. Vicuña Mackenna 8733 local 2<br>Fono: (56-2) 2262 1800</span>
                  </div>

                  <div id="rancagua" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/rancagua.jpg">
                      <span>Rancagua, Av. Cachapoal 1149<br>Fono: (56-72) 223 5256</span>
                  </div>

                  <div id="talca" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/talca.jpg">
                      <span>Talca, 18 Oriente 409<br>Fono: (56-71) 226 1650</span>
                  </div>

                  <div id="chillan" class="office" style="overflow: hidden; display: block;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/chillan.jpg">
                      <span>Chillán, Carrera 2, Esq. Ecuador<br>Fono: (56-42) 223 3317</span>
                  </div>

                  <div id="concepcion" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/concepcion.jpg">
                      <span>Concepción, Manuel Rodriguez N° 747 <br>Fono (56-41) 222 7407</span>
                  </div>

                  <div id="temuco" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/temuco.jpg">
                      <span>Temuco, Andres Bello 110, esq. Freire<br>Fono: (56-45) 231 0177</span>
                  </div>

                  <div id="puerto-montt" class="office" style="overflow: hidden; display: none;">
                      <img src="catalog/view/theme/gobantes/image/sucursales/puerto-montt.jpg">
                      <span>Puerto Montt, Pilpilco 500<br>Fono: (56-65) 234 7537</span>
                  </div> -->


                  <img src="/assets/img/mapa_sucursales.png" class="map" usemap="offices_map">
              </div>
          </div>

          <!-- <map id="offices_map" name="offices_map">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="iquique" coords="72,32,79,40" data-office="iquique">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="calama" coords="92,79,101,88" data-office="calama">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="antofagasta" coords="67,97,73,103" data-office="antofagasta">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="copiapo" coords="61,142,67,151" data-office="copiapo">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="la-serena" coords="57,181,62,191" data-office="la-serena">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="vina-del-mar" coords="50,213,55,221" data-office="vina-del-mar">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="stgo-casa-matriz" coords="65,222,70,227" data-office="stgo-casa-matriz">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="stgo-maipu" coords="58,225,64,233" data-office="stgo-maipu">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="stgo-plaza-egana" coords="66,229,73,237" data-office="stgo-plaza-egana">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="stgo-la-florida" coords="52,232,59,240" data-office="stgo-la-florida">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="rancagua" coords="60,239,65,247" data-office="rancagua">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="talca" coords="43,254,51,261" data-office="talca">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="chillan" coords="42,277,48,285" data-office="chillan">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="concepcion" coords="32,283,39,291" data-office="concepcion">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="temuco" coords="39,307,46,317" data-office="temuco">
              <area href="/index.php?route=information/sucursales" shape="rect" alt="" title="puerto-mont" coords="33,352,40,361" data-office="puerto-montt">
          </map> -->

          <a href="/information/sucursales" class="button-default">Sucursales</a>
          <a href="#" class="button-default">seguimiento de tu orden</a>

      </div>

      <div id="column-right" class="hide-md">
      <div class="box">
    <div class="box-heading">Destacados</div>
    <div class="box-content">
      <div class="box-product">
        @foreach($products as $product)
          <div>
            <div class="image">
              <a href="/show/producto/{{$product->category->name}}/{{ $product->id }}">
                @if(!$product->images->isEmpty())
                  @foreach($product->images as $image)
                    <img border="0" src="{{ url('storage/app/system/products/' . $product->id . '/'. $image->url) }}" alt="$product->name">
                    @break
                  @endforeach
                @else
                    <img src="{{ url('storage/app/system/products/default/test.png') }}" alt="">
                @endif
              </a>
            </div>
            <div class="name">
              <a href="/show/producto/{{$product->category->name}}/{{ $product->id }}">{{ $product->name }}<br>
                <span style="color: #CCC;">SKU: {{ $product->sku }}</span>
              </a>
            </div>
            <div class="price">${{ $product->price }}</div>
            <div class="cart">
              <p>Consulte por este producto en sucursal</p>
            </div>
          </div>
        @endforeach

         

            </div>
    </div>
  </div>
    </div>

      <div class="clear-fix"></div>

    <div class="box brands">
      <div class="box-heading">nuestras marcas</div>
        <div class="box-content">
          <div id="carousel0">
            <div class=" jcarousel-skin-opencart">
              <div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
                <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
                  <ul class="jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 4920px;">
                  <?php 
                    $brands = App\Models\Brand::get();
                    $i = 1;
                   ?>
                    @if(!$brands->isEmpty())
                      @foreach($brands as $brand)
                        <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="{{ $i }}" style="float: left; list-style: none; width: 195px;">
                          <a href="#">
                            <img style="width:195px; height:50px;" border="0" src="{{ url('/images/brands/' . $brand->image) }}" alt="" title="">
                            <!-- <p style="margin:0">Ver catálogo</p> -->
                          </a>
                        </li>
                        <?php 
                          $i++;
                         ?>
                      @endforeach
                    @endif
                  </ul>
                </div>
              <div class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal" disabled="disabled" style="display: block;">
              </div>
              <div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div>
            </div>
          </div>
        </div>
  <script type="text/javascript"><!--
  $('#carousel0 ul').jcarousel({
    vertical: false,
    visible: 5,
    scroll: 3});
  //--></script>        
      </div>
    </div>

  </div>
@endsection