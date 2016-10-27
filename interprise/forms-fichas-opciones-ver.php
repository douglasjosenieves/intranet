<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}
 

require_once __DIR__ . '../../db_connect.php';


// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

 
$clave=$_REQUEST['clave'];
$id=$_REQUEST['id'];
 
$clavemd5 = md5($clave); 
//$clave='122';
//$id='1';

 $resul =  mysql_query("SELECT * FROM `form_fichas_opciones` where ref = $id");

 
$ficha = array();
while($row =  mysql_fetch_array($resul) ) {
$ficha['ficha_opciones'][] = $row;
 
 
}


//if ($resul  == TRUE) { echo "true"; } else {echo 'false';} 

?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Fichas de Opciones</title>
	<meta name="description" content="...">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Icons -->
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	
	<!-- CSS -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" >
		
	<link rel="stylesheet" href="assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<link rel="stylesheet" href="assets/font-awesome-4.4.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="assets/css/fontello.css">
	<link rel="stylesheet" href="assets/css/chartist.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="assets/css/app.min.css">
	<link rel="stylesheet" href="assets/css/dropzone.css">
	<link rel="stylesheet" href="assets/css/print.css" media="print">


	<link rel="stylesheet" href="assets/sweetalert/sweetalert-master/dist/sweetalert.css">
	 
	<!-- Modernizr -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script>

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


	<!-- Header -->
	<?php  require_once 'header.php'; ?>
	
	<?php  require_once 'tareas-pendientes.php'; ?>
	<!-- Page Wrap -->
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle hidden-print">
					<a href="#" title="#">Comercialización </a>
				</h1>
				<ol class="breadcrumb hidden-print">
					<li><a href="index.php">Sharpen</a></li>
					<li><a href="reporte-ficha-opciones.php">Reportes - Fichas de opciones</a></li>
					<li class="active">Ficha de opciones</li>

				</ol>
				
				<div class="box rte">
<div id="encabezado_print" class="visible-print-block" align="right">
				<img src="img/icon-logo.png"> <span>GEA SYSTEMS</span>
				</div>

				<?php if ($_GET['editar']!='true') { $titulo= 'Ver';		}else{$titulo= 'Editar';	}
					?>
					<h2 class="boxHeadline">Ficha de Opciones (<?php echo $titulo ?>)</h2>
					<h3 class="boxHeadlineSub">Formulario</h3>
					
					
					<form id="formulario" action=""  enctype="multipart/form-data">
						
<div class="row">
	
		
	<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Nombre'].' '.$_SESSION['usuario']['Apellido'] ?>" name="editado_por" id="editado_por" placeholder="Editado por:">

 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="referencia">Nº Referencia</label>
									<input type="text" readonly required class="form-control" value="<?php echo $ficha['ficha_opciones'][0]['ref'] ?>" name="ref" id="ref" placeholder="Nº Referencia">
								</div>
							</div>

								 <div class="col-xs-12 col-sm-5">
														<div class="form-group">
															<label for="elaborado_por">Elaborado Por:</label>
															<input  readonly type="text" required class="form-control" value="<?php echo $ficha['ficha_opciones'][0]['elaborado_por'] ?>" name="elaborado_por" id="elaborado_por" placeholder="Elaborado Por:">
														</div>
													</div>


													<div class="col-xs-12 col-sm-3"  style=" margin-top: 40px;color: red;font-weight: bold">
				<div class="form-group checkboxes">
						<label>
							<input name="exclusivo" id="exclusivo" value="1" type="checkbox">
							<span>Ficha Exclusiva</span>
						</label>
					</div>	


					</div>


</div> 

						<div class="row">
	<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Sector:</label>
									<select  id="sector" name="sector" required class="js-select">

										<option value="<?php echo $ficha['ficha_opciones'][0]['sector'] ?>"  selected><?php echo $ficha['ficha_opciones'][0]['sector'] ?></option>
										<option value="Agricultura">Agricultura</option>
										<option value="Alimentación">Alimentación</option>
										<option value="Animales Domésticos">Animales Domésticos</option>
										<option value="Artes Gráficas">Artes Gráficas</option>
										<option value="Asegurador">Asegurador</option>
										<option value="Comercio">Comercio</option>
										<option value="Construcción">Construcción</option>
										<option value="Decoración">Decoración</option>
										<option value="Deportes">Deportes</option>
										<option value="Dietética">Dietética</option>
										<option value="Electrónica">Electrónica</option>
										<option value="Estética / Cosmética">Estética / Cosmética</option>
										<option value="Farmacia">Farmacia</option>
										<option value="Financiero">Financiero</option>
										<option value="Ganadería">Ganadería</option>
										<option value="Industria Alimentaria">Industria Alimentaria</option>
										<option value="Industria Textil">Industria Textil</option>
										<option value="Informática">Informática</option>
										<option value="Inmobiliario">Inmobiliario</option>
										<option value="Moda  ">Moda  </option>
										<option value="Ocio/Tiempo Libre ">Ocio/Tiempo Libre </option>
										<option value="Restauración">Restauración</option>
										<option value="Servicios">Servicios</option>
										<option value="Transporte">Transporte</option>
											<option value="Salud">Salud</option>
										<option value="Otro">Otro</option>

										
									</select>
								</div>
							</div>
					
	

 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="nombre_opcion">Nombre de la opcion:</label>
									<input type="text" value="<?php echo $ficha['ficha_opciones'][0]['nombre_opcion'] ?>" required class="form-control" name="nombre_opcion" id="nombre_opcion" placeholder="Nombre de la opcion:">
								</div>
							</div>

 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="link">Link de Referencia:</label><span class="ver"  ><?php echo $ficha['ficha_opciones'][0]['link'] ?></span>
									<input type="url" required class="form-control" value="<?php echo $ficha['ficha_opciones'][0]['link'] ?>" name="link" id="link" placeholder="Link de Referencia:">
								</div>
							</div>

	

						</div>

						<!-- Custom select -->
						<div class="row customSelectWrap">
						 <div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="direccion">Dirección:</label><span class="ver"><?php echo $ficha['ficha_opciones'][0]['direccion'] ?></span>
															<input type="text" required class="form-control" name="direccion" value="<?php echo $ficha['ficha_opciones'][0]['direccion'] ?>" id="direccion" placeholder="Dirección:">
														</div>
													</div>
							<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Ciudad</label>
									<select  id="ciudad" name="ciudad" required class="js-select">
									<option value="<?php echo $ficha['ficha_opciones'][0]['ciudad'] ?>"  selected><?php echo $ficha['ficha_opciones'][0]['ciudad'] ?></option>
		<option value="ALBACETE">ALBACETE</option>
<option value="ALCALA DE GUADAIRA">ALCALA DE GUADAIRA</option>
<option value="ALCALA DE HENARES">ALCALA DE HENARES</option>
<option value="ALCOBENDAS">ALCOBENDAS</option>
<option value="ALCORCON">ALCORCON</option>
<option value="ALCOY">ALCOY</option>
<option value="ALGECIRAS">ALGECIRAS</option>
<option value="ALICANTE">ALICANTE</option>
<option value="ALMERIA">ALMERIA</option>
<option value="ANDALUCIA">ANDALUCIA</option>
<option value="ARAGON">ARAGON</option>
<option value="ASTURIAS">ASTURIAS</option>
<option value="AVILA">AVILA</option>
<option value="AVILES">AVILES</option>
<option value="BADAJOZ">BADAJOZ</option>
<option value="BADALONA">BADALONA</option>
<option value="BALEARES">BALEARES</option>
<option value="BARCELONA">BARCELONA</option>
<option value="BENIDORM">BENIDORM</option>
<option value="BILBAO">BILBAO</option>
<option value="BURGOS">BURGOS</option>
<option value="CACERES">CACERES</option>
<option value="CADIZ">CADIZ</option>
<option value="CANARIAS">CANARIAS</option>
<option value="CANTABRIA">CANTABRIA</option>
<option value="CARTAGENA">CARTAGENA</option>
<option value="CASTELLON DE LA PLANA">CASTELLON DE LA PLANA</option>
<option value="CASTILLA Y LEON">CASTILLA Y LEON</option>
<option value="CASTILLA-LA MANCHA">CASTILLA-LA MANCHA</option>
<option value="CATALUÑA">CATALUÑA</option>
<option value="CERDANYOLA DEL VALLES">CERDANYOLA DEL VALLES</option>
<option value="CEUTA">CEUTA</option>
<option value="CHICLANA DE LA FRONTERA">CHICLANA DE LA FRONTERA</option>
<option value="CIUDAD REAL">CIUDAD REAL</option>
<option value="COLLADO VILLALBA">COLLADO VILLALBA</option>
<option value="CORDOBA">CORDOBA</option>
<option value="CORNELLÀ DE LLOBREGAT">CORNELLÀ DE LLOBREGAT</option>
<option value="COSLADA">COSLADA</option>
<option value="DONOSTIA-SAN SEBASTIAN">DONOSTIA-SAN SEBASTIAN</option>
<option value="DOS HERMANAS">DOS HERMANAS</option>
<option value="EL EJIDO">EL EJIDO</option>
<option value="EL FERROL DEL CAUDILLO">EL FERROL DEL CAUDILLO</option>
<option value="EL PRAT DE LLOBREGAT">EL PRAT DE LLOBREGAT</option>
<option value="EL PUERTO DE SANTA MARIA">EL PUERTO DE SANTA MARIA</option>
<option value="ELCHE">ELCHE</option>
<option value="ELDA">ELDA</option>
<option value="EXTREMADURA">EXTREMADURA</option>
<option value="FUENLABRADA">FUENLABRADA</option>
<option value="GALICIA">GALICIA</option>
<option value="GANDIA">GANDIA</option>
<option value="GERONA">GERONA</option>
<option value="GETAFE">GETAFE</option>
<option value="GIJON">GIJON</option>
<option value="GRANADA">GRANADA</option>
<option value="GRANOLLERS">GRANOLLERS</option>
<option value="GUADALAJARA">GUADALAJARA</option>
<option value="GUECHO">GUECHO</option>
<option value="HUELVA">HUELVA</option>
<option value="HUESCA">HUESCA</option>
<option value="IRUN">IRUN</option>
<option value="JAEN">JAEN</option>
<option value="JEREZ DE LA FRONTERA">JEREZ DE LA FRONTERA</option>
<option value="LA CORUÑA">LA CORUÑA</option>
<option value="LA LINEA DE LA CONCEPCION">LA LINEA DE LA CONCEPCION</option>
<option value="LA RIOJA">LA RIOJA</option>
<option value="LANGREO">LANGREO</option>
<option value="LAS PALMAS DE GRAN CANARIA">LAS PALMAS DE GRAN CANARIA</option>
<option value="LAS ROZAS DE MADRID">LAS ROZAS DE MADRID</option>
<option value="LEGANES">LEGANES</option>
<option value="LEON">LEON</option>
<option value="LERIDA">LERIDA</option>
<option value="L'HOSPITALET DE LLOBREGAT">L'HOSPITALET DE LLOBREGAT</option>
<option value="LINARES">LINARES</option>
<option value="LOGROÑO">LOGROÑO</option>
<option value="LORCA">LORCA</option>
<option value="LUGO">LUGO</option>
<option value="MADRID">MADRID</option>
<option value="MAJADAHONDA">MAJADAHONDA</option>
<option value="MALAGA">MALAGA</option>
<option value="MANRESA">MANRESA</option>
<option value="MARBELLA">MARBELLA</option>
<option value="MATARO">MATARO</option>
<option value="MELILLA">MELILLA</option>
<option value="MERIDA">MERIDA</option>
<option value="MOSTOLES">MOSTOLES</option>
<option value="MOTRIL">MOTRIL</option>
<option value="MURCIA">MURCIA</option>
<option value="ORENSE">ORENSE</option>
<option value="ORIHUELA">ORIHUELA</option>
<option value="OVIEDO">OVIEDO</option>
<option value="PAIS VASCO">PAIS VASCO</option>
<option value="PALENCIA">PALENCIA</option>
<option value="PALMA DE MALLORCA">PALMA DE MALLORCA</option>
<option value="PAMPLONA">PAMPLONA</option>
<option value="PARLA">PARLA</option>
<option value="PONFERRADA">PONFERRADA</option>
<option value="PONTEVEDRA">PONTEVEDRA</option>
<option value="PORTUGALETE">PORTUGALETE</option>
<option value="POZUELO DE ALARCON">POZUELO DE ALARCON</option>
<option value="REUS">REUS</option>
<option value="ROQUETAS DE MAR">ROQUETAS DE MAR</option>
<option value="RUBI">RUBI</option>
<option value="SABADELL">SABADELL</option>
<option value="SAGUNTO">SAGUNTO</option>
<option value="SALAMANCA">SALAMANCA</option>
<option value="SAN CRISTOBAL DE LA LAGUNA">SAN CRISTOBAL DE LA LAGUNA</option>
<option value="SAN FERNANDO">SAN FERNANDO</option>
<option value="SAN SEBASTIAN DE LOS REYES">SAN SEBASTIAN DE LOS REYES</option>
<option value="SAN VICENTE DE BARACALDO">SAN VICENTE DE BARACALDO</option>
<option value="SANLUCAR DE BARRAMEDA">SANLUCAR DE BARRAMEDA</option>
<option value="SANT BOI DE LLOBREGAT">SANT BOI DE LLOBREGAT</option>
<option value="SANT CUGAT DEL VALLES">SANT CUGAT DEL VALLES</option>
<option value="SANTA COLOMA DE GRAMANET">SANTA COLOMA DE GRAMANET</option>
<option value="SANTA CRUZ DE TENERIFE">SANTA CRUZ DE TENERIFE</option>
<option value="SANTA LUCIA DE TIRAJANA">SANTA LUCIA DE TIRAJANA</option>
<option value="SANTANDER">SANTANDER</option>
<option value="SANTIAGO DE COMPOSTELA">SANTIAGO DE COMPOSTELA</option>
<option value="SEGOVIA">SEGOVIA</option>
<option value="SEVILLA">SEVILLA</option>
<option value="TALAVERA DE LA REINA">TALAVERA DE LA REINA</option>
<option value="TARRAGONA">TARRAGONA</option>
<option value="TARRASA">TARRASA</option>
<option value="TELDE">TELDE</option>
<option value="TERUEL">TERUEL</option>
<option value="TOLEDO">TOLEDO</option>
<option value="TORREJON DE ARDOZ">TORREJON DE ARDOZ</option>
<option value="TORRELAVEGA">TORRELAVEGA</option>
<option value="TORRENTE">TORRENTE</option>
<option value="TORREVIEJA">TORREVIEJA</option>
<option value="UTRERA">UTRERA</option>
<option value="VALENCIA">VALENCIA</option>
<option value="VALLADOLID">VALLADOLID</option>
<option value="VELEZ-MALAGA">VELEZ-MALAGA</option>
<option value="VIGO">VIGO</option>
<option value="VILADECANS">VILADECANS</option>
<option value="VILANOVA I LA GELTRU">VILANOVA I LA GELTRU</option>
<option value="VITORIA">VITORIA</option>
<option value="ZAMORA">ZAMORA</option>
<option value="ZARAGOZA">ZARAGOZA</option>

										
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Zona</label>
									<select name="zona" id="zona" required class="js-select">
											<option value="<?php echo $ficha['ficha_opciones'][0]['zona'] ?>"  selected><?php echo $ficha['ficha_opciones'][0]['zona'] ?></option>
										<option value="CAPITAL">Capital</option>
										<option value="COMUNIDAD">Comunidad</option>
										<option value="MALAGA">Malaga</option>
											<option value="MARBELLA">Marbella</option>
										 
									</select>
									 
								</div>
							</div>
						</div>
<hr />
						 
						<div class="row">
							 
						 <div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="nombre_contacto">Nombre del Contacto:</label>
															<input type="text" value="<?php echo $ficha['ficha_opciones'][0]['nombre_contacto'] ?>" required class="form-control" name="nombre_contacto" id="nombre_contacto" placeholder="Nombre del Contacto:">
														</div>
													</div>



                                         <div class="col-xs-12 col-sm-4">
													<div class="form-group">
									<label for="celular">Teléfono móvil </label>
									<input id="celular" value="<?php echo $ficha['ficha_opciones'][0]['celular'] ?>" name="celular" required class="form-control"  placeholder="Teléfono móvil" type="text">
								</div>
                                </div>



         <div class="col-xs-12 col-sm-4">
													<div class="form-group">
									<label for="local">Teléfono local  </label>
									<input id="local" value="<?php echo $ficha['ficha_opciones'][0]['local'] ?>" name="local" class="form-control"  placeholder="Teléfono local" type="text">
								</div>
                                </div>


						</div>

						<div class="row">
							
 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="vendedor_solicita">Vendedor solicita:</label>
									<input type="number" value="<?php echo $ficha['ficha_opciones'][0]['vendedor_solicita'] ?>"  required class="form-control" name="vendedor_solicita" id="vendedor_solicita" placeholder="Vendedor solicita:">
								</div>
							</div>


 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="nosotros_ofrecemos">Nosotros ofrecemos:</label>
									<input type="number" required class="form-control" name="nosotros_ofrecemos" id="nosotros_ofrecemos" value="<?php echo $ficha['ficha_opciones'][0]['nosotros_ofrecemos'] ?>" placeholder="Nosotros ofrecemos:">
								</div>
							</div>


 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="tamano_local">Tamaño del local en Mt2</label>
									<input type="number" value="<?php echo $ficha['ficha_opciones'][0]['tamano_local'] ?>" required class="form-control" name="tamano_local" id="tamano_local" placeholder="Tamaño del local en Mt2">
								</div>
							</div>
						</div>



						<div class="row">
							

  <div class="col-xs-12 col-sm-4">
 								<div class="form-group">
 									<label for="monto-alquiler">Monto del alquiler:</label>
 									<input type="number" value="<?php echo $ficha['ficha_opciones'][0]['alquiler'] ?>" required class="form-control" name="alquiler" id="alquiler" placeholder="Monto del alquiler:">
 								</div>
 							</div>




 <div class="col-xs-12 col-sm-4">
 								<div class="form-group">
 									<label for="antiguedad">Año de antigüedad:</label>
 									<input type="number" value="<?php echo $ficha['ficha_opciones'][0]['antiguedad'] ?>" required class="form-control" name="antiguedad" id="antiguedad" placeholder="Año de antiguedad:">
 								</div>
 							</div>





					 <?php 
 
if ($ficha['ficha_opciones'][0]['propietario_dispuesto_traspaso']==1) {
$traspas = 'checked'	;
$traspas1 = 'SI'	;
}
else{
$traspas = '';

}
					  ?>
						 
						<div class="row checkboxToggler">
							<div class="col-xs-4 col-sm-3 col-md-2 i">
							<abbr title="Propietario esta dispuesto a traspaso ?">Traspaso? <strong><?php  echo $traspas1 ?></strong>
							</abbr>
								<label>
									<input name="propietario_dispuesto_traspaso" <?php echo $traspas ?> value="<?php echo $ficha['ficha_opciones'][0]['propietario_dispuesto_traspaso'] ?>" type="checkbox">
									<span></span>
								</label>
							</div>
							</div>

					 
						</div>

<div class="row">
	
 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="website">Paginas web:</label>
									<input type="url"  value="<?php echo $ficha['ficha_opciones'][0]['website'] ?>"  class="form-control" name="website" id="website" placeholder="Paginas web:">
								</div>
							</div>


 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="facturacion_mensual">Facturación mensual:</label>
									<input type="number"  value="<?php echo $ficha['ficha_opciones'][0]['facturacion_mensual'] ?>" class="form-control" name="facturacion_mensual" id="facturacion_mensual" placeholder="Facturacion mensual:">
								</div>
							</div>


</div>
<div class="saltopagina"></div>
	<div class="row">
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="comentarios_sobre_negocio">Comentario sobre el negocio:</label><span class="ver"><?php echo $ficha['ficha_opciones'][0]['comentarios_sobre_negocio'] ?></span>
									<textarea id="comentarios_sobre_negocio" name="comentarios_sobre_negocio" class="form-control" rows="8"><?php echo $ficha['ficha_opciones'][0]['comentarios_sobre_negocio'] ?></textarea>
								</div>
							</div>
						

	<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="comentarios_sobre_negocio_interno">Comentario sobre el negocio (Uso interno):</label><span class="ver"><?php echo $ficha['ficha_opciones'][0]['comentarios_sobre_negocio_interno'] ?></span>
									<textarea id="comentarios_sobre_negocio_interno" name="comentarios_sobre_negocio_interno" class="form-control" rows="8"><?php echo $ficha['ficha_opciones'][0]['comentarios_sobre_negocio_interno'] ?></textarea>
								</div>
							</div>
						

						</div>


						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="datos_adicionales">Nuestra valoracion:</label>
									<textarea id="datos_adicionales" name="datos_adicionales"  class="form-control" rows="8"><?php echo $ficha['ficha_opciones'][0]['datos_adicionales'] ?></textarea>
								</div>
							</div>

							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="ventajas_comparativas">Ventajas comparativas:</label>
									<textarea id="ventajas_comparativas" name="ventajas_comparativas"  class="form-control" rows="8"><?php echo $ficha['ficha_opciones'][0]['ventajas_comparativas'] ?></textarea>
								</div>
							</div>

						</div>
					<hr />
		

<?php  
$imagen = explode(';',$ficha['ficha_opciones'][0]['capture1']) ;


foreach ($imagen as $key => $value) {if ($value !='') {?>


		
	
	<input type="hidden" name="img[]"  value="<?php echo $value ?>" id="" data-nombre="<?php echo $value ?>" class="imageninput img-viejas" placeholder="Texto">


<?php
}}


if (!empty($imagen[0])) {

	$imagen0 = 'file-upload/'.$imagen[0].'';
	}

else{

$imagen0 = 'img/sin_imagen_disponible.jpg';
	}

if (!empty($imagen[1])) {

$imagen1 = 'file-upload/'.$imagen[1].'';
	}

else{

$imagen1 = 'img/sin_imagen_disponible.jpg';
	}

 ?>


							<div class="col-xs-6"><img class="img-thumbnail" src="<?php echo $imagen0;  ?>">  </div>
							

							<div class="col-xs-6"><img class="img-thumbnail" src="<?php echo $imagen1;  ?>"> </div>


<!--=====================================
=            Para cargar nuevas Imagenes            =
======================================-->
<div id="cargar_imagen"><label for="comentarios_sobre_negocio"><i class="fa fa-image" style="font-size: 30px;
    color: #fe5621;"></i> Cargar imagen:</label>
<div id="dZUpload" class="dropzone" style=" border-color: #e6e7ed;border-left: 3px solid #4bae4f;  " >
<div class="dz-default dz-message"></div>
</div>
<div id="img"></div>
</div>
<hr>
<div class="row">
	


	<div class="col-xs-12 col-sm-12">
								<div class="form-group">
									<label for="comentarios_sobre_negocio_interno">Comentario (Visita comercial):</label>
									<textarea id="comentarios_sobre_negocio_comercial" value=""  name="comentarios_sobre_negocio_comercial" class="form-control" rows="8"><?php echo $ficha['ficha_opciones'][0]['comentarios_sobre_negocio_comercial'] ?></textarea>
								</div>
							</div>
						

</div>
<label for="comentarios_sobre_negocio"><i class="fa fa-image" style="font-size: 30px;
    color: #fe5621;"></i> Cargar imagen (REALES):</label>
<div id="dZUpload2" class="dropzone" style=" border-color: #e6e7ed;border-left: 3px solid #4bae4f;  " >
<div class="dz-default dz-message"></div>
</div>
<div id="img2"></div>
 

<div class="doc_ajuntos">
<h3>Documentos adjuntos</h3>
<?php $pre_adjunto = explode(';',$ficha['ficha_opciones'][0]['capture2']) ;

if  (is_array($pre_adjunto )){
foreach ($pre_adjunto as $key => $value) {
	

if ($value!='') {
	




 ?>



<button type="button" class="btn bg-red borrar" data-nombre="<?php echo $value ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>


<a class="btn btn-large  bg-green" data-nombre="<?php echo $value ?>" target="_blank"  href="file-upload/images-fopciones-reales/<?php echo $value ?>" role="button"> <i class="fa fa-download"></i> <?php echo $value ?></a>

<input type="hidden" name="imagenes[]" value="<?php echo $value ?>" id="" data-nombre="<?php echo $value ?>" class="imageninput" placeholder="Texto">

<?php }} }?>

</div>



<?php if ($_GET['editar']=='true') { ?>


	<?php } ?>	 

<!--====  End of Para cargar nuevas Imagenes  ====-->




 


					
<hr />

						
<div class="row"   >

<button type="button" onclick="window.print();" class="btn bg-indigo hidden-print">Imprimir  <i class="fa fa-print"></i></button>


<?php if ($_GET['editar']=='true') { ?>

<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary">Guardar</button>



	<?php } ?>

</div>
					</form>
  

 



</div>
				</div>
				
			
			</div>
		</div>
	</div>
	
	<!-- Search modal -->
<?php require_once 'buscar.php'; ?>

	<!-- JS -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	 
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/parsley.min.js"></script>
	<script src="assets/js/throttle-debounce.min.js"></script>
	<script src="assets/js/jquery.shuffle.min.js"></script>
	<script src="assets/js/autosize.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/Chart.min.js"></script>
	<script src="assets/js/chartist.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/jquery.fullscreen.min.js"></script>
	<script src="assets/js/jquery.mask.min.js"></script>
	<script src="assets/js/charCount.js"></script>
	<script src="assets/js/bootstrap-maxlength.js"></script>
	<script src="assets/js/pwstrength-bootstrap-1.2.9.min.js"></script>
	<script src="assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/js/bootstrap-typeahead.js"></script>
	<script src="assets/js/mention.js"></script>
	<script src="assets/plugins/wysihtml-master/dist/wysihtml.min.js"></script>
	<script src="assets/plugins/wysihtml-master/dist/wysihtml-toolbar.min.js"></script>
	<script src="assets/plugins/wysihtml-master/parser_rules/advanced_and_extended.js"></script>
	<script src="assets/plugins/ckeditor/ckeditor.js"></script>
	<script src="assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
	<script src="assets/js/app.min.js"></script>
    <script src="assets/js/dropzone.js"></script>

	<div class="visible-xs visible-sm extendedChecker"></div>


	<script type="text/javascript">

$(document).ready(function() {
var exclusivo = "<?php echo $ficha['ficha_opciones'][0]['exclusivo'] ?>";


if (exclusivo=='1') {
	$("#exclusivo").prop("checked", "checked");

	}
});

 
    Dropzone.autoDiscover = false;
jQuery(document).ready(function() {


 var fileList = new Array;
 var i =0;
 var date = moment().format('DDMYYYY');
//alert(date);
 
  myDropzone = new Dropzone("#dZUpload", { 
    url: 'upload.php',
    dictDefaultMessage: "your custom message",
    autoProcessQueue:true, //BARRRA DE CARGA 
    maxFilesize: 1, // MB
    maxFiles: 2, //CANTIDAD DE ARCHIVOS PERMITIDOS
    addRemoveLinks: true, ///MOSTRAR EL LINK DE REMOVER IMAGEN
    acceptedFiles: 'image/*', //SOLO ACEPTAR IMAGEN FORMATO
    success: function (file, serverFileName) {
    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                        console.log(fileList);

         var n = $('.img-viejas').size();

         if (n >= 1) {


$('.img-viejas').each(function(indice, elemento) {
  console.log('El elemento con el índice '+indice+' contiene '+$(elemento).val());

$.ajax({
   url: "delete.php",
    type: "POST",
    data: { "name" : $(elemento).val()}
});


});

$('.img-viejas').remove();
//$(this).attr('data-nombre');

}

                        i++; 	
   console.log(serverFileName);
    	 swal("Good job!", "Uploas a imagen!", "success");
 
    	   $('#img').append('<div><input type="hidden" name="img[]" value="'+serverFileName+'"id="campo_" class="imageninput" placeholder="Texto"/></div>');
    	  return file.previewElement.classList.add("dz-success");
       // console.log("Sucesso");
       // console.log(response); 'name': file.name
 

    },
     removedfile: function(file) { 
      var _ref;
  var rmvFile = "";
                        for(f=0;f<fileList.length;f++){

                            if(fileList[f].fileName == file.name)
                            {
                                rmvFile = fileList[f].serverFileName;
                         
                            }

                        }

                        if (rmvFile){
                            $.ajax({
                               url: "delete.php",
                                type: "POST",
                                data: { "name" : rmvFile }
                            });
                           $('#img :input[value="'+rmvFile+'"]').remove();
                        }
                    

 
//'#img :input[value="'+file.name+'"]').remove();
  

//$.ajax({
//url: "delete.php",
//type: "POST",
//data: { 'name': file.name}
//});

return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
				

    },


 
  });

   
});
 


$(document).ready(function() {
 

	/*===========================================================
	=            Aqui vamos a desabilitar los campos            =
	===========================================================*/
	
	<?php if ($_GET['editar']!='true') { ?>

$('#link').hide();
$('#comentarios_sobre_negocio_interno').hide();
$('#direccion').hide();

$('#comentarios_sobre_negocio').hide();


$('input').prop('disabled', 'disabled');
$( "#sector" ).prop( "disabled", true );
$( "#ciudad" ).prop( "disabled", true );
$( "#zona" ).prop( "disabled", true );
$( "#comentarios_sobre_negocio" ).prop( "disabled", true );
$( "#comentarios_sobre_negocio_interno" ).prop( "disabled", true );
$( "#datos_adicionales" ).prop( "disabled", true );
$( "#ventajas_comparativas" ).prop( "disabled", true );
$( "#cargar_imagen" ).hide();  

<?php } else {

	 ?>
$('.ver').hide();
<?php 
}
?>



/*=====  End of Aqui vamos a desabilitar los campos  ======*/
	
 

	console.log("ready");

$('#formulario').on('submit', function(e){
e.preventDefault();
$('#boton').button('loading');
console.log('Envio el formulario');

$.ajax({
	url: 'envios/form-fichas-opciones-editar.php',
	type: 'POST',
	//dataType: 'json',
	data: $('#formulario').serialize(),
})
.done(function(d) {
	console.log("success");
	console.log(d);

	if (d=='true') {
document.getElementById("formulario").reset();

 
  $('#img :input').remove();
    $('#img2 :input').remove();

swal({ 
  title: "Opción editada!",
   text: "You clicked the button!",
    type: "success" 
  },
  function(){
   location.reload();
   // window.location.href = 'login.html';
});
}

//swal("Good job!", "You clicked the button!", "success");
//location.reload();
})
.fail(function(data) {
	console.log("error");
	console.log(data);

})
.always(function() {
	console.log("complete");
	$('#boton').button('reset');
});

});



});







/**
 *
 * Esta es la carga de imagen2
 *
 */




jQuery(document).ready(function() {
 var fileList = new Array;
 var i =0;
 var date = moment().format('DDMYYYY');
//alert(date);
 
  myDropzone = new Dropzone("#dZUpload2", { 
    url: 'upload2.php',
    dictDefaultMessage: "your custom message",
    autoProcessQueue:true, //BARRRA DE CARGA 
    maxFilesize: 100, // MB
    maxFiles: 500, //CANTIDAD DE ARCHIVOS PERMITIDOS
    addRemoveLinks: true, ///MOSTRAR EL LINK DE REMOVER IMAGEN
    acceptedFiles: 'image/*', //SOLO ACEPTAR IMAGEN FORMATO
    success: function (file, serverFileName) {
    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                        console.log(fileList);
                        i++; 	
   console.log(serverFileName);
    	 swal("Good job!", "Uploas a imagen!", "success");
 
    	   $('#img2').append('<div><input type="hidden" name="img2[]" value="'+serverFileName+'"id="campo2_" class="imageninput" placeholder="Texto"/></div>');
    	  return file.previewElement.classList.add("dz-success");
       // console.log("Sucesso");
       // console.log(response); 'name': file.name


    },
     removedfile: function(file) { 
      var _ref;
  var rmvFile = "";
                        for(f=0;f<fileList.length;f++){

                            if(fileList[f].fileName == file.name)
                            {
                                rmvFile = fileList[f].serverFileName;
                         
                            }

                        }

                        if (rmvFile){
                            $.ajax({
                               url: "delete2.php",
                                type: "POST",
                                data: { "name" : rmvFile }
                            });
                           $('#img2 :input[value="'+rmvFile+'"]').remove();
                        }
                    

 
//'#img :input[value="'+file.name+'"]').remove();
  

//$.ajax({
//url: "delete.php",
//type: "POST",
//data: { 'name': file.name}
//});

return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
				

    },


 
  });

   
});


/*============================================
=            PARAR BORRAR LA FOTO            =
============================================*/


$(document).ready(function() {
	$('.borrar').on('click',  function(event) {
	event.preventDefault();
var archivo = $(this).attr('data-nombre');
console.log(archivo);
	/* Act on the event */


$.ajax({
	url: 'delete2.php',
	type: 'POST',
	
	data: {name: archivo },
})
.done(function(data) {
	console.log("success");
	console.log(data);


$('a[data-nombre="'+archivo+'"]').remove();
$('.borrar[data-nombre="'+archivo+'"]').remove();

$('.imageninput[data-nombre="'+archivo+'"]').remove();
 

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});



	
	
});
});

/*=====  End of PARAR BORRAR LA FOTO  ======*/


	</script>
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>