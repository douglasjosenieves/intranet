<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}

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
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		
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
				<h1 class="pageTitle">
					<a href="#" title="#">Ficha de Opciones </a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Sharpen</a></li>
					<li class="active">Procesos</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline">Dirección de operaciones</h2>
					<h3 class="boxHeadlineSub">Coordinación comercial</h3>
					
					
					<form id="formulario" action=""  enctype="multipart/form-data">
						
<div class="row">
	
		


 <div class="col-xs-12 col-sm-2">
								<div class="form-group">
									<label for="referencia">Nº Referencia</label>
									<input type="text" readonly required class="form-control" name="referencia" id="referencia" placeholder="Nº Referencia">
								</div>
							</div>

								 <div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="elaborado_por">Elaborado Por:</label>
															<input  readonly type="text" required class="form-control" value="<?php echo $_SESSION['usuario']['Nombre'].' '.$_SESSION['usuario']['Apellido'] ?>" name="elaborado_por" id="elaborado_por" placeholder="Elaborado Por:">
														</div>
													</div>



<div class="col-xs-12 col-sm-6"  style=" margin-top: 40px;color: red;font-weight: bold">
				<div class="form-group checkboxes">
						<label>
							<input name="exclusivo" value="1" type="checkbox">
							<span>Ficha Exclusiva</span>
						</label>
					</div>	


					</div>
								


</div>

						<div class="row">
	<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Sector:</label>
									<select name="sector" required class="js-select">
										<option value="" disabled selected>- Select ciudad-</option>
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
										<option value="Moda">Moda  </option>
										<option value="Ocio/Tiempo Libre">Ocio/Tiempo Libre </option>
										<option value="Restauración">Restauración</option>
										<option value="Servicios">Servicios</option>
										<option value="Transporte">Transporte</option>
										<option value="Salud">Salud</option>
											<option value="Hosteleria">Hosteleria</option>
										<option value="Otro">Otro</option>

										
									</select>
								</div>
							</div>
					
	

 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="nombre_opcion">Nombre de la opcion:</label>
									<input type="text" required class="form-control" name="nombre_opcion" id="nombre_opcion" placeholder="Nombre de la opcion:">
								</div>
							</div>

 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="link">Link de Referencia:</label>
									<input type="url" required class="form-control" name="link" id="link" placeholder="Link de Referencia:">
								</div>
							</div>

	

						</div>

						<!-- Custom select -->
						<div class="row customSelectWrap">
						 <div class="col-xs-12 col-sm-3">
														<div class="form-group">
															<label for="direccion">Dirección:</label>
															<input type="text" required class="form-control" name="direccion" id="direccion" placeholder="Dirección:">
														</div>
													</div>
							<div class="col-xs-12 col-sm-3 i">
								<div class="form-group">
									<label>Ciudad</label>
									<select name="ciudad" required class="js-select">
										<option value="" disabled selected>- Select ciudad-</option>
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
							<div class="col-xs-12 col-sm-3 i">
								<div class="form-group">
									<label>Zona</label>
									<select name="zona" required class="js-select">
										<option value=""  disabled selected>- Select zona -</option>
										<option value="CAPITAL">Capital</option>
										<option value="COMUNIDAD">Comunidad</option>
										<option value="MALAGA">Malaga</option>
											<option value="MARBELLA">Marbella</option>
										 
									</select>
									 
								</div>
							</div>


		<div class="col-xs-12 col-sm-3 i">
								<div class="form-group">
									<label>Código postal</label>
									<select name="cod_postal" id="cod_postal" required class="js-select">
										<option value="" >- Seleccione código postal -</option>
									<option value="28755">28755 LA ACEBEDA</option>
<option value="28864">28864 AJALVIR</option>
<option value="28749">28749 ALAMEDA DEL VALLE</option>
<option value="28607">28607 EL ÁLAMO</option>
<option value="28801">28801 ALCALÁ DE HENARES</option>
<option value="28802">28802 ALCALÁ DE HENARES</option>
<option value="28803">28803 ALCALÁ DE HENARES</option>
<option value="28804">28804 ALCALÁ DE HENARES</option>
<option value="28805">28805 ALCALÁ DE HENARES</option>
<option value="28806">28806 ALCALÁ DE HENARES</option>
<option value="28807">28807 ALCALÁ DE HENARES</option>
<option value="28100">28100 ALCOBENDAS</option>
<option value="28108">28108 ALCOBENDAS</option>
<option value="28109">28109 ALCOBENDAS</option>
<option value="28921">28921 ALCORCÓN</option>
<option value="28922">28922 ALCORCÓN</option>
<option value="28923">28923 ALCORCÓN</option>
<option value="28924">28924 ALCORCÓN</option>
<option value="28925">28925 ALCORCÓN</option>
<option value="28620">28620 ALDEA DEL FRESNO</option>
<option value="28110">28110 ALGETE</option>
<option value="28119">28119 ALGETE</option>
<option value="28120">28120 ALGETE</option>
<option value="28430">28430 ALPEDRETE</option>
<option value="28580">28580 AMBITE</option>
<option value="28818">28818 ANCHUELO</option>
<option value="28300">28300 ARANJUEZ</option>
<option value="28310">28310 ARANJUEZ</option>
<option value="28311">28311 ARANJUEZ</option>
<option value="28312">28312 ARANJUEZ</option>
<option value="28500">28500 ARGANDA DEL REY</option>
<option value="28529">28529 ARGANDA DEL REY</option>
<option value="28939">28939 ARROYOMOLINOS</option>
<option value="28189">28189 EL ATAZAR</option>
<option value="28976">28976 BATRES</option>
<option value="28490">28490 BECERRIL DE LA SIERRA</option>
<option value="28390">28390 BELMONTE DE TAJO</option>
<option value="28194">28194 BERZOSA DEL LOZOYA</option>
<option value="28192">28192 EL BERRUECO</option>
<option value="28660">28660 BOADILLA DEL MONTE</option>
<option value="28412">28412 EL BOALO</option>
<option value="28413">28413 EL BOALO</option>
<option value="28492">28492 EL BOALO</option>
<option value="28737">28737 BRAOJOS</option>
<option value="28596">28596 BREA DE TAJO</option>
<option value="28690">28690 BRUNETE</option>
<option value="28730">28730 BUITRAGO DEL LOZOYA</option>
<option value="28720">28720 BUSTARVIEJO</option>
<option value="28721">28721 CABANILLAS DE LA SIERRA</option>
<option value="28751">28751 LA CABRERA</option>
<option value="28640">28640 CADALSO DE LOS VIDRIOS</option>
<option value="28648">28648 CADALSO DE LOS VIDRIOS</option>
<option value="28816">28816 CAMARMA DE ESTERUELAS</option>
<option value="28510">28510 CAMPO REAL</option>
<option value="28743">28743 CANENCIA</option>
<option value="28560">28560 CARABAÑA</option>
<option value="28977">28977 CASARRUBUELOS</option>
<option value="28650">28650 CENICIENTOS</option>
<option value="28470">28470 CERCEDILLA</option>
<option value="28479">28479 CERCEDILLA</option>
<option value="28193">28193 CERVERA DE BUITRAGO</option>
<option value="28350">28350 CIEMPOZUELOS</option>
<option value="28863">28863 COBEÑA</option>
<option value="28213">28213 COLMENAR DEL ARROYO</option>
<option value="28380">28380 COLMENAR DE OREJA</option>
<option value="28270">28270 COLMENAREJO</option>
<option value="28120">28120 COLMENAR VIEJO</option>
<option value="28707">28707 COLMENAR VIEJO</option>
<option value="28770">28770 COLMENAR VIEJO</option>
<option value="28780">28780 COLMENAR VIEJO</option>
<option value="28450">28450 COLLADO MEDIANO</option>
<option value="28459">28459 COLLADO MEDIANO</option>
<option value="28400">28400 COLLADO VILLALBA</option>
<option value="28811">28811 CORPA</option>
<option value="28821">28821 COSLADA</option>
<option value="28822">28822 COSLADA</option>
<option value="28823">28823 COSLADA</option>
<option value="28978">28978 CUBAS DE LA SAGRA</option>
<option value="28694">28694 CHAPINERÍA</option>
<option value="28370">28370 CHINCHÓN</option>
<option value="28814">28814 DAGANZO DE ARRIBA</option>
<option value="28211">28211 EL ESCORIAL</option>
<option value="28219">28219 EL ESCORIAL</option>
<option value="28280">28280 EL ESCORIAL</option>
<option value="28292">28292 EL ESCORIAL</option>
<option value="28595">28595 ESTREMERA</option>
<option value="28214">28214 FRESNEDILLAS DE LA OLIVA</option>
<option value="28815">28815 FRESNO DE TOROTE</option>
<option value="28940">28940 FUENLABRADA</option>
<option value="28941">28941 FUENLABRADA</option>
<option value="28942">28942 FUENLABRADA</option>
<option value="28943">28943 FUENLABRADA</option>
<option value="28944">28944 FUENLABRADA</option>
<option value="28945">28945 FUENLABRADA</option>
<option value="28946">28946 FUENLABRADA</option>
<option value="28947">28947 FUENLABRADA</option>
<option value="28140">28140 FUENTE EL SAZ DE JARAMA</option>
<option value="28597">28597 FUENTIDUEÑA DE TAJO</option>
<option value="28250">28250 GALAPAGAR</option>
<option value="28260">28260 GALAPAGAR</option>
<option value="28292">28292 GALAPAGAR</option>
<option value="28400">28400 GALAPAGAR</option>
<option value="28420">28420 GALAPAGAR</option>
<option value="28743">28743 GARGANTA DE LOS MONTES</option>
<option value="28749">28749 GARGANTA DE LOS MONTES</option>
<option value="28739">28739 GARGANTILLA DEL LOZOYA Y PINILLA DE BUITRAGO</option>
<option value="28737">28737 GASCONES</option>
<option value="28901">28901 GETAFE</option>
<option value="28902">28902 GETAFE</option>
<option value="28903">28903 GETAFE</option>
<option value="28904">28904 GETAFE</option>
<option value="28905">28905 GETAFE</option>
<option value="28906">28906 GETAFE</option>
<option value="28907">28907 GETAFE</option>
<option value="28909">28909 GETAFE</option>
<option value="28971">28971 GRIÑÓN</option>
<option value="28794">28794 GUADALIX DE LA SIERRA</option>
<option value="28430">28430 GUADARRAMA</option>
<option value="28440">28440 GUADARRAMA</option>
<option value="28480">28480 GUADARRAMA</option>
<option value="28191">28191 LA HIRUELA</option>
<option value="28755">28755 HORCAJO DE LA SIERRA-AOSLOS</option>
<option value="28191">28191 HORCAJUELO DE LA SIERRA</option>
<option value="28240">28240 HOYO DE MANZANARES</option>
<option value="28248">28248 HOYO DE MANZANARES</option>
<option value="28970">28970 HUMANES DE MADRID</option>
<option value="28911">28911 LEGANÉS</option>
<option value="28912">28912 LEGANÉS</option>
<option value="28913">28913 LEGANÉS</option>
<option value="28914">28914 LEGANÉS</option>
<option value="28915">28915 LEGANÉS</option>
<option value="28916">28916 LEGANÉS</option>
<option value="28917">28917 LEGANÉS</option>
<option value="28918">28918 LEGANÉS</option>
<option value="28919">28919 LEGANÉS</option>
<option value="28890">28890 LOECHES</option>
<option value="28742">28742 LOZOYA</option>
<option value="28755">28755 MADARCOS</option>
<option value="28001">28001 MADRID</option>
<option value="28002">28002 MADRID</option>
<option value="28003">28003 MADRID</option>
<option value="28004">28004 MADRID</option>
<option value="28005">28005 MADRID</option>
<option value="28006">28006 MADRID</option>
<option value="28007">28007 MADRID</option>
<option value="28008">28008 MADRID</option>
<option value="28009">28009 MADRID</option>
<option value="28010">28010 MADRID</option>
<option value="28011">28011 MADRID</option>
<option value="28012">28012 MADRID</option>
<option value="28013">28013 MADRID</option>
<option value="28014">28014 MADRID</option>
<option value="28015">28015 MADRID</option>
<option value="28016">28016 MADRID</option>
<option value="28017">28017 MADRID</option>
<option value="28018">28018 MADRID</option>
<option value="28019">28019 MADRID</option>
<option value="28020">28020 MADRID</option>
<option value="28021">28021 MADRID</option>
<option value="28022">28022 MADRID</option>
<option value="28023">28023 MADRID</option>
<option value="28024">28024 MADRID</option>
<option value="28025">28025 MADRID</option>
<option value="28026">28026 MADRID</option>
<option value="28027">28027 MADRID</option>
<option value="28028">28028 MADRID</option>
<option value="28029">28029 MADRID</option>
<option value="28030">28030 MADRID</option>
<option value="28031">28031 MADRID</option>
<option value="28032">28032 MADRID</option>
<option value="28033">28033 MADRID</option>
<option value="28034">28034 MADRID</option>
<option value="28035">28035 MADRID</option>
<option value="28036">28036 MADRID</option>
<option value="28037">28037 MADRID</option>
<option value="28038">28038 MADRID</option>
<option value="28039">28039 MADRID</option>
<option value="28040">28040 MADRID</option>
<option value="28041">28041 MADRID</option>
<option value="28042">28042 MADRID</option>
<option value="28043">28043 MADRID</option>
<option value="28044">28044 MADRID</option>
<option value="28045">28045 MADRID</option>
<option value="28046">28046 MADRID</option>
<option value="28047">28047 MADRID</option>
<option value="28048">28048 MADRID</option>
<option value="28049">28049 MADRID</option>
<option value="28050">28050 MADRID</option>
<option value="28051">28051 MADRID</option>
<option value="28052">28052 MADRID</option>
<option value="28053">28053 MADRID</option>
<option value="28054">28054 MADRID</option>
<option value="28055">28055 MADRID</option>
<option value="28790">28790 MADRID</option>
<option value="28220">28220 MAJADAHONDA</option>
<option value="28221">28221 MAJADAHONDA</option>
<option value="28222">28222 MAJADAHONDA</option>
<option value="28410">28410 MANZANARES EL REAL</option>
<option value="28411">28411 MANZANARES EL REAL</option>
<option value="28492">28492 MANZANARES EL REAL</option>
<option value="28880">28880 MECO</option>
<option value="28840">28840 MEJORADA DEL CAMPO</option>
<option value="28792">28792 MIRAFLORES DE LA SIERRA</option>
<option value="28793">28793 MIRAFLORES DE LA SIERRA</option>
<option value="28710">28710 EL MOLAR</option>
<option value="28460">28460 LOS MOLINOS</option>
<option value="28190">28190 MONTEJO DE LA SIERRA</option>
<option value="28950">28950 MORALEJA DE ENMEDIO</option>
<option value="28411">28411 MORALZARZAL</option>
<option value="28530">28530 MORATA DE TAJUÑA</option>
<option value="28931">28931 MÓSTOLES</option>
<option value="28932">28932 MÓSTOLES</option>
<option value="28933">28933 MÓSTOLES</option>
<option value="28934">28934 MÓSTOLES</option>
<option value="28935">28935 MÓSTOLES</option>
<option value="28936">28936 MÓSTOLES</option>
<option value="28937">28937 MÓSTOLES</option>
<option value="28938">28938 MÓSTOLES</option>
<option value="28491">28491 NAVACERRADA</option>
<option value="28729">28729 NAVALAFUENTE</option>
<option value="28212">28212 NAVALAGAMELLA</option>
<option value="28600">28600 NAVALCARNERO</option>
<option value="28739">28739 NAVARREDONDA Y SAN MAMÉS</option>
<option value="28695">28695 NAVAS DEL REY</option>
<option value="28513">28513 NUEVO BAZTÁN</option>
<option value="28514">28514 NUEVO BAZTÁN</option>
<option value="28515">28515 OLMEDA DE LAS FUENTES</option>
<option value="28570">28570 ORUSCO DE TAJUÑA</option>
<option value="28860">28860 PARACUELLOS DE JARAMA</option>
<option value="28861">28861 PARACUELLOS DE JARAMA</option>
<option value="28862">28862 PARACUELLOS DE JARAMA</option>
<option value="28981">28981 PARLA</option>
<option value="28982">28982 PARLA</option>
<option value="28983">28983 PARLA</option>
<option value="28984">28984 PARLA</option>
<option value="28189">28189 PATONES</option>
<option value="28723">28723 PEDREZUELA</option>
<option value="28696">28696 PELAYOS DE LA PRESA</option>
<option value="28540">28540 PERALES DE TAJUÑA</option>
<option value="28812">28812 PEZUELA DE LAS TORRES</option>
<option value="28749">28749 PINILLA DEL VALLE</option>
<option value="28320">28320 PINTO</option>
<option value="28737">28737 PIÑUÉCAR-GANDULLAS</option>
<option value="28223">28223 POZUELO DE ALARCÓN</option>
<option value="28224">28224 POZUELO DE ALARCÓN</option>
<option value="28813">28813 POZUELO DEL REY</option>
<option value="28191">28191 PRÁDENA DEL RINCÓN</option>
<option value="28190">28190 PUEBLA DE LA SIERRA</option>
<option value="28693">28693 QUIJORNA</option>
<option value="28740">28740 RASCAFRÍA</option>
<option value="28741">28741 RASCAFRÍA</option>
<option value="28749">28749 RASCAFRÍA</option>
<option value="28721">28721 REDUEÑA</option>
<option value="28815">28815 RIBATEJADA</option>
<option value="28521">28521 RIVAS-VACIAMADRID</option>
<option value="28522">28522 RIVAS-VACIAMADRID</option>
<option value="28523">28523 RIVAS-VACIAMADRID</option>
<option value="28524">28524 RIVAS-VACIAMADRID</option>
<option value="28194">28194 ROBLEDILLO DE LA JARA</option>
<option value="28294">28294 ROBLEDO DE CHAVELA</option>
<option value="28755">28755 ROBREGORDO</option>
<option value="28231">28231 LAS ROZAS DE MADRID</option>
<option value="28232">28232 LAS ROZAS DE MADRID</option>
<option value="28290">28290 LAS ROZAS DE MADRID</option>
<option value="28648">28648 ROZAS DE PUERTO REAL</option>
<option value="28649">28649 ROZAS DE PUERTO REAL</option>
<option value="28750">28750 SAN AGUSTÍN DEL GUADALIX</option>
<option value="28830">28830 SAN FERNANDO DE HENARES</option>
<option value="28850">28850 SAN FERNANDO DE HENARES</option>
<option value="28200">28200 SAN LORENZO DE EL ESCORIAL</option>
<option value="28209">28209 SAN LORENZO DE EL ESCORIAL</option>
<option value="28330">28330 SAN MARTÍN DE LA VEGA</option>
<option value="28680">28680 SAN MARTÍN DE VALDEIGLESIAS</option>
<option value="28701">28701 SAN SEBASTIÁN DE LOS REYES</option>
<option value="28702">28702 SAN SEBASTIÁN DE LOS REYES</option>
<option value="28703">28703 SAN SEBASTIÁN DE LOS REYES</option>
<option value="28706">28706 SAN SEBASTIÁN DE LOS REYES</option>
<option value="28707">28707 SAN SEBASTIÁN DE LOS REYES</option>
<option value="28708">28708 SAN SEBASTIÁN DE LOS REYES</option>
<option value="28709">28709 SAN SEBASTIÁN DE LOS REYES</option>
<option value="28296">28296 SANTA MARÍA DE LA ALAMEDA</option>
<option value="28297">28297 SANTA MARÍA DE LA ALAMEDA</option>
<option value="28818">28818 SANTORCAZ</option>
<option value="28817">28817 LOS SANTOS DE LA HUMOSA</option>
<option value="28737">28737 LA SERNA DEL MONTE</option>
<option value="28979">28979 SERRANILLOS DEL VALLE</option>
<option value="28609">28609 SEVILLA LA NUEVA</option>
<option value="28756">28756 SOMOSIERRA</option>
<option value="28791">28791 SOTO DEL REAL</option>
<option value="28160">28160 TALAMANCA DE JARAMA</option>
<option value="28550">28550 TIELMES</option>
<option value="28359">28359 TITULCIA</option>
<option value="28850">28850 TORREJÓN DE ARDOZ</option>
<option value="28991">28991 TORREJÓN DE LA CALZADA</option>
<option value="28990">28990 TORREJÓN DE VELASCO</option>
<option value="28180">28180 TORRELAGUNA</option>
<option value="28250">28250 TORRELODONES</option>
<option value="28189">28189 TORREMOCHA DE JARAMA</option>
<option value="28813">28813 TORRES DE LA ALAMEDA</option>
<option value="28594">28594 VALDARACETE</option>
<option value="28816">28816 VALDEAVERO</option>
<option value="28391">28391 VALDELAGUNA</option>
<option value="28729">28729 VALDEMANCO</option>
<option value="28295">28295 VALDEMAQUEDA</option>
<option value="28210">28210 VALDEMORILLO</option>
<option value="28341">28341 VALDEMORO</option>
<option value="28342">28342 VALDEMORO</option>
<option value="28343">28343 VALDEMORO</option>
<option value="28130">28130 VALDEOLMOS-ALALPARDO</option>
<option value="28170">28170 VALDEPIÉLAGOS</option>
<option value="28150">28150 VALDETORRES DE JARAMA</option>
<option value="28511">28511 VALDILECHA</option>
<option value="28812">28812 VALVERDE DE ALCALÁ</option>
<option value="28891">28891 VELILLA DE SAN ANTONIO</option>
<option value="28722">28722 EL VELLÓN</option>
<option value="28729">28729 VENTURADA</option>
<option value="28360">28360 VILLACONEJOS</option>
<option value="28630">28630 VILLA DEL PRADO</option>
<option value="28810">28810 VILLALBILLA</option>
<option value="28598">28598 VILLAMANRIQUE DE TAJO</option>
<option value="28610">28610 VILLAMANTA</option>
<option value="28609">28609 VILLAMANTILLA</option>
<option value="28690">28690 VILLANUEVA DE LA CAÑADA</option>
<option value="28691">28691 VILLANUEVA DE LA CAÑADA</option>
<option value="28692">28692 VILLANUEVA DE LA CAÑADA</option>
<option value="28229">28229 VILLANUEVA DEL PARDILLO</option>
<option value="28609">28609 VILLANUEVA DE PERALES</option>
<option value="28512">28512 VILLAR DEL OLMO</option>
<option value="28514">28514 VILLAR DEL OLMO</option>
<option value="28590">28590 VILLAREJO DE SALVANÉS</option>
<option value="28670">28670 VILLAVICIOSA DE ODÓN</option>
<option value="28679">28679 VILLAVICIOSA DE ODÓN</option>
<option value="28739">28739 VILLAVIEJA DEL LOZOYA</option>
<option value="28293">28293 ZARZALEJO</option>
<option value="28752">28752 LOZOYUELA-NAVAS-SIETEIGLESIAS</option>
<option value="28753">28753 LOZOYUELA-NAVAS-SIETEIGLESIAS</option>
<option value="28754">28754 LOZOYUELA-NAVAS-SIETEIGLESIAS</option>
<option value="28195">28195 PUENTES VIEJAS</option>
<option value="28196">28196 PUENTES VIEJAS</option>
<option value="28754">28754 PUENTES VIEJAS</option>
<option value="28760">28760 TRES CANTOS</option>
<option value="28790">28790 TRES CANTOS</option>

										 
									</select>
									 
								</div>
							</div>


						</div>
<hr />
						 
						<div class="row">
							 
						 <div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="nombre_contacto">Nombre del Contacto:</label>
															<input type="text" required class="form-control" name="nombre_contacto" id="nombre_contacto" placeholder="Nombre del Contacto:">
														</div>
													</div>



                                         <div class="col-xs-12 col-sm-4">
													<div class="form-group">
									<label for="celular">Teléfono móvil </label>
									<input id="celular" name="celular" required class="form-control"  placeholder="Teléfono móvil" type="text">
								</div>
                                </div>



         <div class="col-xs-12 col-sm-4">
													<div class="form-group">
									<label for="local">Teléfono local  </label>
									<input id="local" name="local" class="form-control"  placeholder="Teléfono local" type="text">
								</div>
                                </div>


						</div>

						<div class="row">
							
 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="vendedor_solicita">Vendedor solicita:</label>
									<input type="number"  required class="form-control" name="vendedor_solicita" id="vendedor_solicita" placeholder="Vendedor solicita:">
								</div>
							</div>


 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="nosotros_ofrecemos">Nosotros ofrecemos:</label>
									<input type="number" required class="form-control" name="nosotros_ofrecemos" id="nosotros_ofrecemos" placeholder="Nosotros ofrecemos:">
								</div>
							</div>


 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="tamano_local">Tamaño del local en Mt2</label>
									<input type="number" required class="form-control" name="tamano_local" id="tamano_local" placeholder="Tamaño del local en Mt2">
								</div>
							</div>
						</div>



						<div class="row">
							

  <div class="col-xs-12 col-sm-4">
 								<div class="form-group">
 									<label for="monto-alquiler">Monto del alquiler:</label>
 									<input type="number" required class="form-control" name="alquiler" id="alquiler" placeholder="Monto del alquiler:">
 								</div>
 							</div>



  <div class="col-xs-12 col-sm-4">
 								<div class="form-group inputSliders">
							<label for="amount">
								Años de antigüedad:
								<input type="text" name="antiguedad" id="amount" class="max-range-value" value="1" readonly style="border:0; color:#363f45;">
							</label>
							<div class="sliderWrap">
								<div id="slider-range-max"></div>
							</div>
						</div>
</div>


					 
						 
						<div class="row checkboxToggler">
							<div class="col-xs-4 col-sm-3 col-md-2 i">
							<abbr title="Propietario esta dispuesto a traspaso ?">Traspaso?</abbr>
								<label>
									<input name="propietario_dispuesto_traspaso" value="1" type="checkbox">
									<span></span>
								</label>
							</div>
							</div>

					 
						</div>

<div class="row">
	
 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="website">Paginas web:</label>
									<input type="url"   class="form-control" name="website" id="website" placeholder="Paginas web:">
								</div>
							</div>


 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="facturacion_mensual">Facturación mensual:</label>
									<input type="number"  class="form-control" name="facturacion_mensual" id="facturacion_mensual" placeholder="Facturacion mensual:">
								</div>
							</div>


</div>

	<div class="row">
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="comentarios_sobre_negocio">Comentario sobre el negocio:</label>
									<textarea id="comentarios_sobre_negocio" name="comentarios_sobre_negocio" class="form-control" rows="8"></textarea>
								</div>
							</div>
						

	<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="comentarios_sobre_negocio_interno">Comentario sobre el negocio (Uso interno):</label>
									<textarea id="comentarios_sobre_negocio_interno" name="comentarios_sobre_negocio_interno" class="form-control" rows="8"></textarea>
								</div>
							</div>
						

						</div>


						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="datos_adicionales">Nuestra valoracion:</label>
									<textarea id="datos_adicionales" name="datos_adicionales"  class="form-control" rows="8"></textarea>
								</div>
							</div>

							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="ventajas_comparativas">Ventajas comparativas:</label>
									<textarea id="ventajas_comparativas" name="ventajas_comparativas"  class="form-control" rows="8"></textarea>
								</div>
							</div>

						</div>
					<hr />
		

	<label for="comentarios_sobre_negocio"><i class="fa fa-image" style="font-size: 30px;
    color: #fe5621;"></i> Cargar imagen:</label>
<div id="dZUpload" class="dropzone" style=" border-color: #e6e7ed;border-left: 3px solid #4bae4f;  " >
<div class="dz-default dz-message"></div>
</div>
<div id="img"></div>
 


					
<hr />




<div class="row">
	


	<div class="col-xs-12 col-sm-12">
								<div class="form-group">
									<label for="comentarios_sobre_negocio_interno">Comentario (Visita comercial):</label>
									<textarea id="comentarios_sobre_negocio_comercial" name="comentarios_sobre_negocio_comercial" class="form-control" rows="8"></textarea>
								</div>
							</div>
						

</div>


	<label for="comentarios_sobre_negocio"><i class="fa fa-image" style="font-size: 30px;
    color: #fe5621;"></i> Cargar imagen (REALES):</label>
<div id="dZUpload2" class="dropzone" style=" border-color: #e6e7ed;border-left: 3px solid #4bae4f;  " >
<div class="dz-default dz-message"></div>
</div>
<div id="img2"></div>
 


					
<hr />




						<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary">Guardar</button>
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

 

 
    Dropzone.autoDiscover = false;
jQuery(document).ready(function() {

	$('#cod_postal').val('<?php echo $data['data'][0]['cod_postal'] ?>').change();
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
 

	console.log("ready");

$('#formulario').on('submit', function(e){
e.preventDefault();
$('#boton').button('loading');
console.log('Envio el formulario');

$.ajax({
	url: 'envios/form-fichas-opciones-insert.php',
	type: 'POST',
	//dataType: 'json',
	data: $('#formulario').serialize(),
})
.done(function(data) {

	console.log("success");
console.log(data);


    if (data==1) {


    document.getElementById("formulario").reset();

 
  $('#img :input').remove();
  $('#img2 :input').remove();
swal({ 
  title: "Good job!",
   text: "You clicked the button!",
    type: "success" 
  },
  function(){
   location.reload();
   // window.location.href = 'login.html';
});


swal({ 
  title: "Enviado!",
   text: "Se ha procesado con éxito!",
    type: "success" 
  },
  function(){
 $('#formulario')[0].reset();
location.reload();
});

}

 

else {

sweetAlert("Oops...", "Consulte este error con su programador!", "error");
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

	</script>
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>