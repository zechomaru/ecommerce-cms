@extends('layouts.ecommerce')

@section('content')


<div id="column-left" class="si-ver">
  <div class="box account">
    <div class="box-heading">Cuenta</div>
    <div class="box-content">
      <ul>
        <li><a href="/login">Inicio de sesión</a> / <a href="/register">Registro</a></li>
        <li><a href="/account/forgotten">Contraseña olvidada</a></li>
        <li><a href="/account/account">Mi cuenta</a></li>
        <li><a href="/account/address">Libreta de Direcciones</a></li>
        <li><a href="/account/wishlist">Lista de favoritos</a></li>
        <li><a href="/account/order">Historial de pedidos</a></li>
        <li><a href="/account/newsletter">Boletín de noticias</a></li>
      </ul>
    </div>
  </div>
</div>

  <div id="content">  
    <div class="breadcrumb">
      <a href="/">Inicio</a>» <a href="/account">Cuenta</a>» <a href="/register">Registro</a>
    </div>
    <h1>Registro de cuenta</h1>
    <p>Si ya tienes una cuenta con nosotros, por favor inicia sesion en la  <a href="/login">página de acceso</a>.</p>
    <form method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      @foreach ($errors->all() as $error)
            <li style="color: #FF2929;">{{ $error }}</li>
        @endforeach
      <h2>Tus datos personales</h2>
      <div class="content">
        <table class="form">
          <tbody><tr>
            <td><span class="required">*</span> Nombre:</td>
            <td><input type="text" name="name" value="{{ old('name') }}">
              </td>
          </tr>
          <tr>
            <td><span class="required">*</span> Apellido/s:</td>
            <td><input type="text" name="last_name" value="{{ old('last_name') }}">
              </td>
          </tr>
          <tr>
            <td><span class="required">*</span> Rut</td>
            <td><input type="text" id="rutInput" name="rut" value="{{ old('rut') }}" required="">
              </td>
          </tr>
          <tr>
            <td><span class="required">*</span> E-Mail:</td>
            <td><input type="email" name="email" value="{{ old('email') }}">
              </td>
          </tr>
          <tr>
            <td><span class="required">*</span> Teléfono:</td>
            <td><input type="text" name="phone" value="{{ old('phone') }}">
              </td>
          </tr>

        </tbody></table>
      </div>
      <h2>Tu dirección</h2>
      <div class="content">
        <table class="form">
          <tbody><tr>
            <td>Compañia:</td>
            <td><input type="text" name="company" value="{{ old('company') }}"></td>
          </tr>        
          <!-- <tr style="display: none;">
            <td>Tipo de Negocio:</td>
            <td>                        <input type="radio" name="customer_group_id" value="1" id="customer_group_id1" checked="checked">
              <label for="customer_group_id1">Default</label>
              <br>
                          </td>
          </tr>  -->     
          <tr id="company-id-display">
            <td><span id="company-id-required" class="required" style="display: none;">*</span> RUT de facturación</td>
            <td><input type="text" id="rutFacturacion" name="rut_invoce" value="{{ old('rut_invoce') }}">
              </td>
          </tr>
          <!-- <tr id="tax-id-display" style="display: none;">
            <td><span id="tax-id-required" class="required">*</span> ID del Impuesto:</td>
            <td><input type="text" name="tax_id" value="">
              </td>
          </tr> -->
          <tr>
            <td><span class="required">*</span> Dirección 1:</td>
            <td><input type="text" name="direction" value="{{ old('direction') }}">
              </td>
          </tr>
          <tr>
            <td>Dirección 2:</td>
            <td><input type="text" name="direction_ext" value="{{ old('direction_ext') }}"></td>
          </tr>
          <tr>
            <td><span class="required">*</span> País:</td>
            <td><select name="country_id">
              <option value="43" selected="selected">Chile</option>                                
              </select>
              </td>
          </tr>
          <tr>
            <td><span class="required">*</span> Región / Estado:</td>
            <td>
              <select name="state">
                <option value=""> --- Por favor Selecciona--- </option>
                <option value="671">Aisen</option>
                <option value="672">Antofagasta</option>
                <option value="673">Araucania</option>
                <option value="4033">Arica y Parinacota</option>
                <option value="674">Atacama</option>
                <option value="675">Bio-Bio</option>
                <option value="676">Coquimbo</option>
                <option value="678">Los Lagos</option>
                <option value="679">Magallanes</option>
                <option value="680">Maule</option>
                <option value="677">O'Higgins</option>
                <option value="681">Region Metropolitana</option>
                <option value="682">Tarapaca</option>
                <option value="683">Valparaiso</option>
              </select>
              </td>
          </tr>
          
          <tr>
            <td><span class="required">*</span> Ciudad:</td>
            <td><input type="text" name="city" value="">
              </td>
          </tr>
      <tr>
        <td><span class="required">*</span> Comuna:</td>
        <td>
            <select name="commune" class="large-field">
              <option value="">Seleccione una comuna...</option>
                                <option value="Achao">Achao</option>
                                  <option value="Algarrobo">Algarrobo</option>
                                  <option value="Alhue">Alhue</option>
                                  <option value="Alto Del Carmen">Alto Del Carmen</option>
                                  <option value="Alto Hospicio">Alto Hospicio</option>
                                  <option value="Alto Hospicio">Alto Hospicio</option>
                                  <option value="Ancud">Ancud</option>
                                  <option value="Andacollo">Andacollo</option>
                                  <option value="Angol">Angol</option>
                                  <option value="Antartica">Antartica</option>
                                  <option value="Antofagasta">Antofagasta</option>
                                  <option value="Antuco">Antuco</option>
                                  <option value="Arauco">Arauco</option>
                                  <option value="Arica">Arica</option>
                                  <option value="Aysen">Aysen</option>
                                  <option value="Buchupureo">Buchupureo</option>
                                  <option value="Buin">Buin</option>
                                  <option value="Bulnes">Bulnes</option>
                                  <option value="Cabildo">Cabildo</option>
                                  <option value="Cabrero">Cabrero</option>
                                  <option value="Calama">Calama</option>
                                  <option value="Calbuco">Calbuco</option>
                                  <option value="Caldera">Caldera</option>
                                  <option value="Calera De Tango">Calera De Tango</option>
                                  <option value="Calle Larga">Calle Larga</option>
                                  <option value="Camarones">Camarones</option>
                                  <option value="Camina">Camina</option>
                                  <option value="Canela">Canela</option>
                                  <option value="Canete">Canete</option>
                                  <option value="Carahue">Carahue</option>
                                  <option value="Carampangue">Carampangue</option>
                                  <option value="Cartagena">Cartagena</option>
                                  <option value="Casablanca">Casablanca</option>
                                  <option value="Castro">Castro</option>
                                  <option value="Catemu">Catemu</option>
                                  <option value="Cauquenes">Cauquenes</option>
                                  <option value="Cerrillos">Cerrillos</option>
                                  <option value="Cerro Navia">Cerro Navia</option>
                                  <option value="Chaiten">Chaiten</option>
                                  <option value="Chanaral">Chanaral</option>
                                  <option value="Chanco">Chanco</option>
                                  <option value="Chepica">Chepica</option>
                                  <option value="Chiguayante">Chiguayante</option>
                                  <option value="Chile Chico">Chile Chico</option>
                                  <option value="Chillan">Chillan</option>
                                  <option value="Chillan Viejo">Chillan Viejo</option>
                                  <option value="Chimbarongo">Chimbarongo</option>
                                  <option value="Chochol">Chochol</option>
                                  <option value="Chonchi">Chonchi</option>
                                  <option value="Chuquicamata">Chuquicamata</option>
                                  <option value="Cobquecura">Cobquecura</option>
                                  <option value="Cochamo">Cochamo</option>
                                  <option value="Cochrane">Cochrane</option>
                                  <option value="Codegua">Codegua</option>
                                  <option value="Coelemu">Coelemu</option>
                                  <option value="Coihueco">Coihueco</option>
                                  <option value="Coinco">Coinco</option>
                                  <option value="Colbun">Colbun</option>
                                  <option value="Colchane">Colchane</option>
                                  <option value="Colina">Colina</option>
                                  <option value="Collipulli">Collipulli</option>
                                  <option value="Coltauco">Coltauco</option>
                                  <option value="Combarbala">Combarbala</option>
                                  <option value="Con-Con">Con-Con</option>
                                  <option value="Concepcion">Concepcion</option>
                                  <option value="Conchali">Conchali</option>
                                  <option value="Constitucion">Constitucion</option>
                                  <option value="Contulmo">Contulmo</option>
                                  <option value="Copiapo">Copiapo</option>
                                  <option value="Coquimbo">Coquimbo</option>
                                  <option value="Coronel">Coronel</option>
                                  <option value="Corral">Corral</option>
                                  <option value="Coyhaique">Coyhaique</option>
                                  <option value="Cumpeo">Cumpeo</option>
                                  <option value="Cunco">Cunco</option>
                                  <option value="Curacautin">Curacautin</option>
                                  <option value="Curacavi">Curacavi</option>
                                  <option value="Curaco De Velez">Curaco De Velez</option>
                                  <option value="Curanilahue">Curanilahue</option>
                                  <option value="Curanipe">Curanipe</option>
                                  <option value="Curarrehue">Curarrehue</option>
                                  <option value="Curepto">Curepto</option>
                                  <option value="Curico">Curico</option>
                                  <option value="Dalcahue">Dalcahue</option>
                                  <option value="Diego De Almagro">Diego De Almagro</option>
                                  <option value="Donihue">Donihue</option>
                                  <option value="El Belloto">El Belloto</option>
                                  <option value="El Bosque">El Bosque</option>
                                  <option value="El Carmen">El Carmen</option>
                                  <option value="El Monte">El Monte</option>
                                  <option value="El Quisco">El Quisco</option>
                                  <option value="El Salvador">El Salvador</option>
                                  <option value="El Tabo">El Tabo</option>
                                  <option value="Empedrado">Empedrado</option>
                                  <option value="Entre-Lagos">Entre-Lagos</option>
                                  <option value="Ercilla">Ercilla</option>
                                  <option value="Estacion Central">Estacion Central</option>
                                  <option value="Florida">Florida</option>
                                  <option value="Freire">Freire</option>
                                  <option value="Freirina">Freirina</option>
                                  <option value="Fresia">Fresia</option>
                                  <option value="Frutillar">Frutillar</option>
                                  <option value="Futaleufu">Futaleufu</option>
                                  <option value="Futrono">Futrono</option>
                                  <option value="Galvarino">Galvarino</option>
                                  <option value="General Lagos">General Lagos</option>
                                  <option value="Gorbea">Gorbea</option>
                                  <option value="Graneros">Graneros</option>
                                  <option value="Guaitecas">Guaitecas</option>
                                  <option value="Guanaqueros">Guanaqueros</option>
                                  <option value="Hijuelas">Hijuelas</option>
                                  <option value="Hornopiren">Hornopiren</option>
                                  <option value="Hualaihue">Hualaihue</option>
                                  <option value="Hualane">Hualane</option>
                                  <option value="Hualpen">Hualpen</option>
                                  <option value="Hualqui">Hualqui</option>
                                  <option value="Huara">Huara</option>
                                  <option value="Huasco">Huasco</option>
                                  <option value="Huechuraba">Huechuraba</option>
                                  <option value="Illapel">Illapel</option>
                                  <option value="Independencia">Independencia</option>
                                  <option value="Iquique">Iquique</option>
                                  <option value="Isla De Maipo">Isla De Maipo</option>
                                  <option value="Isla De Pascua">Isla De Pascua</option>
                                  <option value="Itahue">Itahue</option>
                                  <option value="Juan Fernandez">Juan Fernandez</option>
                                  <option value="La Calera">La Calera</option>
                                  <option value="La Cisterna">La Cisterna</option>
                                  <option value="La Cruz">La Cruz</option>
                                  <option value="La Estrella">La Estrella</option>
                                  <option value="La Florida">La Florida</option>
                                  <option value="La Granja">La Granja</option>
                                  <option value="La Higuera">La Higuera</option>
                                  <option value="La Ligua">La Ligua</option>
                                  <option value="La Pintana">La Pintana</option>
                                  <option value="La Reina">La Reina</option>
                                  <option value="La Serena">La Serena</option>
                                  <option value="La Union">La Union</option>
                                  <option value="Lago Ranco">Lago Ranco</option>
                                  <option value="Lago Verde">Lago Verde</option>
                                  <option value="Laguna Blanca">Laguna Blanca</option>
                                  <option value="Laja">Laja</option>
                                  <option value="Lampa">Lampa</option>
                                  <option value="Lanco">Lanco</option>
                                  <option value="Laraquete">Laraquete</option>
                                  <option value="Las Cabras">Las Cabras</option>
                                  <option value="Las Condes">Las Condes</option>
                                  <option value="Lautaro">Lautaro</option>
                                  <option value="Lebu">Lebu</option>
                                  <option value="Licanray">Licanray</option>
                                  <option value="Licanten">Licanten</option>
                                  <option value="Limache">Limache</option>
                                  <option value="Linares">Linares</option>
                                  <option value="Linderos">Linderos</option>
                                  <option value="Lirquen">Lirquen</option>
                                  <option value="Litueche">Litueche</option>
                                  <option value="Llanquihue">Llanquihue</option>
                                  <option value="Llay-Llay">Llay-Llay</option>
                                  <option value="Llo-Lleo">Llo-Lleo</option>
                                  <option value="Lo Barnechea">Lo Barnechea</option>
                                  <option value="Lo Espejo">Lo Espejo</option>
                                  <option value="Lo Miranda">Lo Miranda</option>
                                  <option value="Lo Prado">Lo Prado</option>
                                  <option value="Lolol">Lolol</option>
                                  <option value="Loncoche">Loncoche</option>
                                  <option value="Longavi">Longavi</option>
                                  <option value="Lonquimay">Lonquimay</option>
                                  <option value="Lontue">Lontue</option>
                                  <option value="Los Alamos">Los Alamos</option>
                                  <option value="Los Andes">Los Andes</option>
                                  <option value="Los Angeles">Los Angeles</option>
                                  <option value="Los Lagos">Los Lagos</option>
                                  <option value="Los Lirios">Los Lirios</option>
                                  <option value="Los Muermos">Los Muermos</option>
                                  <option value="Los Sauces">Los Sauces</option>
                                  <option value="Los Vilos">Los Vilos</option>
                                  <option value="Lota">Lota</option>
                                  <option value="Lumaco">Lumaco</option>
                                  <option value="Machali">Machali</option>
                                  <option value="Macul">Macul</option>
                                  <option value="Mafil">Mafil</option>
                                  <option value="Maipu">Maipu</option>
                                  <option value="Maitencillo">Maitencillo</option>
                                  <option value="Mallarauco">Mallarauco</option>
                                  <option value="Malloa">Malloa</option>
                                  <option value="Malloco">Malloco</option>
                                  <option value="Marchihue">Marchihue</option>
                                  <option value="Maria Elena">Maria Elena</option>
                                  <option value="Maria Pinto">Maria Pinto</option>
                                  <option value="Maule">Maule</option>
                                  <option value="Maullin">Maullin</option>
                                  <option value="Mejillones">Mejillones</option>
                                  <option value="Melipeuco">Melipeuco</option>
                                  <option value="Melipilla">Melipilla</option>
                                  <option value="Mincha">Mincha</option>
                                  <option value="Molina">Molina</option>
                                  <option value="Monte Patria">Monte Patria</option>
                                  <option value="Mulchen">Mulchen</option>
                                  <option value="Nacimiento">Nacimiento</option>
                                  <option value="Nancagua">Nancagua</option>
                                  <option value="Navarino">Navarino</option>
                                  <option value="Navidad">Navidad</option>
                                  <option value="Negrete">Negrete</option>
                                  <option value="Ninhue">Ninhue</option>
                                  <option value="Niquen">Niquen</option>
                                  <option value="Nogales">Nogales</option>
                                  <option value="Nueva Imperial">Nueva Imperial</option>
                                  <option value="Nunoa">Nunoa</option>
                                  <option value="O' Higgins">O' Higgins</option>
                                  <option value="Olivar">Olivar</option>
                                  <option value="Ollague">Ollague</option>
                                  <option value="Olmue">Olmue</option>
                                  <option value="Osorno">Osorno</option>
                                  <option value="Ovalle">Ovalle</option>
                                  <option value="Padre Hurtado">Padre Hurtado</option>
                                  <option value="Padre Las Casas">Padre Las Casas</option>
                                  <option value="Paihuano">Paihuano</option>
                                  <option value="Paillaco">Paillaco</option>
                                  <option value="Paine">Paine</option>
                                  <option value="Paipote">Paipote</option>
                                  <option value="Palena">Palena</option>
                                  <option value="Palmilla">Palmilla</option>
                                  <option value="Panguipulli">Panguipulli</option>
                                  <option value="Panquehue">Panquehue</option>
                                  <option value="Papudo">Papudo</option>
                                  <option value="Paredones">Paredones</option>
                                  <option value="Pargua">Pargua</option>
                                  <option value="Parral">Parral</option>
                                  <option value="Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
                                  <option value="Pelarco">Pelarco</option>
                                  <option value="Pelequen">Pelequen</option>
                                  <option value="Pelluhue">Pelluhue</option>
                                  <option value="Pemuco">Pemuco</option>
                                  <option value="Penaflor">Penaflor</option>
                                  <option value="Penalolen">Penalolen</option>
                                  <option value="Pencahue">Pencahue</option>
                                  <option value="Penco">Penco</option>
                                  <option value="Peralillo">Peralillo</option>
                                  <option value="Perquenco">Perquenco</option>
                                  <option value="Petorca">Petorca</option>
                                  <option value="Peumo">Peumo</option>
                                  <option value="Pica">Pica</option>
                                  <option value="Pichidangui">Pichidangui</option>
                                  <option value="Pichidegua">Pichidegua</option>
                                  <option value="Pichilemu">Pichilemu</option>
                                  <option value="Pinto">Pinto</option>
                                  <option value="Pirque">Pirque</option>
                                  <option value="Pitrufquen">Pitrufquen</option>
                                  <option value="Placilla">Placilla</option>
                                  <option value="Portezuelo">Portezuelo</option>
                                  <option value="Porvenir">Porvenir</option>
                                  <option value="Potrerillos">Potrerillos</option>
                                  <option value="Pozo Almonte">Pozo Almonte</option>
                                  <option value="Primavera">Primavera</option>
                                  <option value="Providencia">Providencia</option>
                                  <option value="Puchuncavi">Puchuncavi</option>
                                  <option value="Pucon">Pucon</option>
                                  <option value="Pudahuel">Pudahuel</option>
                                  <option value="Puente Alto">Puente Alto</option>
                                  <option value="Puerto Aysen">Puerto Aysen</option>
                                  <option value="Puerto Chacabuco">Puerto Chacabuco</option>
                                  <option value="Puerto Cisnes">Puerto Cisnes</option>
                                  <option value="Puerto Montt">Puerto Montt</option>
                                  <option value="Puerto Natales">Puerto Natales</option>
                                  <option value="Puerto Octay">Puerto Octay</option>
                                  <option value="Puerto Varas">Puerto Varas</option>
                                  <option value="Puerto Williams">Puerto Williams</option>
                                  <option value="Pumanque">Pumanque</option>
                                  <option value="Punitaqui">Punitaqui</option>
                                  <option value="Punta Arenas">Punta Arenas</option>
                                  <option value="Puqueldon">Puqueldon</option>
                                  <option value="Puren">Puren</option>
                                  <option value="Purranque">Purranque</option>
                                  <option value="Putaendo">Putaendo</option>
                                  <option value="Putre">Putre</option>
                                  <option value="Puyehue">Puyehue</option>
                                  <option value="Queilen">Queilen</option>
                                  <option value="Quellon">Quellon</option>
                                  <option value="Quemchi">Quemchi</option>
                                  <option value="Quilaco">Quilaco</option>
                                  <option value="Quilicura">Quilicura</option>
                                  <option value="Quilleco">Quilleco</option>
                                  <option value="Quillon">Quillon</option>
                                  <option value="Quillota">Quillota</option>
                                  <option value="Quilpue">Quilpue</option>
                                  <option value="Quinchao">Quinchao</option>
                                  <option value="Quinta Del Tilcoco">Quinta Del Tilcoco</option>
                                  <option value="Quinta Normal">Quinta Normal</option>
                                  <option value="Quintero">Quintero</option>
                                  <option value="Quirihue">Quirihue</option>
                                  <option value="Rancagua">Rancagua</option>
                                  <option value="Ranquil">Ranquil</option>
                                  <option value="Rauco">Rauco</option>
                                  <option value="Recoleta">Recoleta</option>
                                  <option value="Renaca">Renaca</option>
                                  <option value="Renaico">Renaico</option>
                                  <option value="Renca">Renca</option>
                                  <option value="Rengo">Rengo</option>
                                  <option value="Requinoa">Requinoa</option>
                                  <option value="Retiro">Retiro</option>
                                  <option value="Rinconada">Rinconada</option>
                                  <option value="Rio Bueno">Rio Bueno</option>
                                  <option value="Rio Claro">Rio Claro</option>
                                  <option value="Rio Hurtado">Rio Hurtado</option>
                                  <option value="Rio Ibanez">Rio Ibanez</option>
                                  <option value="Rio Negro">Rio Negro</option>
                                  <option value="Rio Verde">Rio Verde</option>
                                  <option value="Romeral">Romeral</option>
                                  <option value="Saavedra">Saavedra</option>
                                  <option value="Saavedra">Saavedra</option>
                                  <option value="Sagrada Familia">Sagrada Familia</option>
                                  <option value="Salamanca">Salamanca</option>
                                  <option value="San Antonio">San Antonio</option>
                                  <option value="San Bernardo">San Bernardo</option>
                                  <option value="San Carlos">San Carlos</option>
                                  <option value="San Clemente">San Clemente</option>
                                  <option value="San Esteban">San Esteban</option>
                                  <option value="San Fabian">San Fabian</option>
                                  <option value="San Felipe">San Felipe</option>
                                  <option value="San Fernando">San Fernando</option>
                                  <option value="San Fsco.De Mostazal">San Fsco.De Mostazal</option>
                                  <option value="San Gregorio">San Gregorio</option>
                                  <option value="San Ignacio">San Ignacio</option>
                                  <option value="San Javier">San Javier</option>
                                  <option value="San Joaquin">San Joaquin</option>
                                  <option value="San Jose De La Mariquina">San Jose De La Mariquina</option>
                                  <option value="San Jose De Maipo">San Jose De Maipo</option>
                                  <option value="San Juan De La Costa">San Juan De La Costa</option>
                                  <option value="San Miguel">San Miguel</option>
                                  <option value="San Nicolas">San Nicolas</option>
                                  <option value="San Pablo">San Pablo</option>
                                  <option value="San Pedro De Atacama">San Pedro De Atacama</option>
                                  <option value="San Pedro De La Paz">San Pedro De La Paz</option>
                                  <option value="San Pedro De Melipilla">San Pedro De Melipilla</option>
                                  <option value="San Rafael">San Rafael</option>
                                  <option value="San Ramon">San Ramon</option>
                                  <option value="San Rosendo">San Rosendo</option>
                                  <option value="Santa Barbara">Santa Barbara</option>
                                  <option value="Santa Cruz">Santa Cruz</option>
                                  <option value="Santa Juana">Santa Juana</option>
                                  <option value="Santa Maria">Santa Maria</option>
                                  <option value="Santiago">Santiago</option>
                                  <option value="Santo Domingo">Santo Domingo</option>
                                  <option value="Sierra Gorda">Sierra Gorda</option>
                                  <option value="Sn. Vicente De Tagua Tagua">Sn. Vicente De Tagua Tagua</option>
                                  <option value="Talagante">Talagante</option>
                                  <option value="Talca">Talca</option>
                                  <option value="Talcahuano">Talcahuano</option>
                                  <option value="Taltal">Taltal</option>
                                  <option value="Temuco">Temuco</option>
                                  <option value="Teno">Teno</option>
                                  <option value="Teodoro Schmidt">Teodoro Schmidt</option>
                                  <option value="Tierra Amarilla">Tierra Amarilla</option>
                                  <option value="Til-Til">Til-Til</option>
                                  <option value="Timaukel">Timaukel</option>
                                  <option value="Tirua">Tirua</option>
                                  <option value="Toconao">Toconao</option>
                                  <option value="Tocopilla">Tocopilla</option>
                                  <option value="Tolten">Tolten</option>
                                  <option value="Tome">Tome</option>
                                  <option value="Tongoy">Tongoy</option>
                                  <option value="Torres Del Paine">Torres Del Paine</option>
                                  <option value="Traiguen">Traiguen</option>
                                  <option value="Trehuaco">Trehuaco</option>
                                  <option value="Tucapel">Tucapel</option>
                                  <option value="Valdivia">Valdivia</option>
                                  <option value="Vallenar">Vallenar</option>
                                  <option value="Valparaiso">Valparaiso</option>
                                  <option value="Ventanas">Ventanas</option>
                                  <option value="Vichuquen">Vichuquen</option>
                                  <option value="Victoria">Victoria</option>
                                  <option value="Vicuna">Vicuna</option>
                                  <option value="Vilcun">Vilcun</option>
                                  <option value="Villa Alegre">Villa Alegre</option>
                                  <option value="Villa Alemana">Villa Alemana</option>
                                  <option value="Villarrica">Villarrica</option>
                                  <option value="Vina Del Mar">Vina Del Mar</option>
                                  <option value="Vitacura">Vitacura</option>
                                  <option value="Yerbas Buenas">Yerbas Buenas</option>
                                  <option value="Yumbel">Yumbel</option>
                                  <option value="Yungay">Yungay</option>
                                  <option value="Zapallar">Zapallar</option>
                                  <option value="[Otra...]">[Otra...]</option>
                         </select>
        </td>
      </tr>
          <tr>
            <td><span id="postcode-required" class="required" style="display: none;">*</span> Código postal:</td>
            <td><input type="text" name="zip_code" value="{{ old('zip_code') }}">
              </td>
          </tr>
        </tbody></table>
      </div>
      <h2>Tu contraseña</h2>
      <div class="content">
        <table class="form">
          <tbody><tr>
            <td><span class="required">*</span> Contraseña:</td>
            <td><input type="password" name="password" value="">
              </td>
          </tr>
          <tr>
            <td><span class="required">*</span> Confirma contraseña:</td>
            <td><input type="password" name="password_confirmation" value="">
              </td>
          </tr>
        </tbody></table>
      </div>
      <h2>Boletín de noticias</h2>
      <div class="content">
        <table class="form">
          <tbody><tr>
            <td>Suscripción:</td>
            <td>
              <input type="radio" name="newsletter" value="1">
              Si
              <input type="radio" name="newsletter" value="0" checked="checked">
              No            
            </td>
          </tr>
        </tbody></table>
      </div>
          <div class="buttons">
        <div class="right">He leido y acepto las <a class="thickbox" href="/page/information" alt="Privacidad"><b>Privacidad</b></a>                <input type="checkbox" name="validate" value="1">
                  <input type="submit" value="Continuar" class="button">
        </div>
      </div>
        </form>
    </div>
@endsection
