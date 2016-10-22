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

 $resul =  mysql_query("SELECT * FROM `contactos_web` where id = $id");

 
$contactos_web = array();
while($row =  mysql_fetch_array($resul) ) {
$contactos_web[] = $row;
 
 
}


?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Registro de clientes Editar</title>
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
	<!-- Header -->
	<?php  require_once 'header.php'; ?>
	
	<?php  require_once 'tareas-pendientes.php'; ?>
	<!-- Page Wrap -->
<form id="formulario">
	<!-- Page Wrap -->
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#">Formulario (Editar)</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="dashboard.html">Sharpen</a></li>
					<li class="active">Formularios</li>
				</ol>
				
				<div id="generales" class="box rte">
					<h2 class="boxHeadline">Ficha de contacto</h2>
					<h3 class="boxHeadlineSub">Datos del formulario web.</h3>
					
					

					<div class="row">
	
		


<div class="col-xs-12 col-sm-2">
						<div class="form-group">
							<label for="referencia">Nº Referencia</label>
							<input type="text" value="<?php echo $id ?>" readonly required class="form-control" name="referencia" id="referencia" placeholder="Nº Referencia">
						</div>
					</div>


<?php  require_once 'asesor_funtion.php'; ?>

<div class="col-xs-12 col-sm-2">
<div class="form-group">
<label for="basicInput">Asesor</label>
<input type="text" value="<?php echo nombreAsessor($contactos_web[0]['elaborado_por'])?>" disabled  class="form-control" name="elaborado_por" id="elaborado_por" placeholder="Asesor">
</div>
</div>

								<!--  <div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="elaborado_por">Editado Por:</label>
															 -->

						<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="editado_por" id="editado_por" placeholder="Elaborado Por:">
													<!-- 	</div>
													</div> -->


														<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="js-select ">
									<option value="<?php echo $contactos_web[0]['status'] ?>"  selected><?php echo $contactos_web[0]['status'] ?></option>
										<option disabled >- Select Status -</option>
										<option value="FORMULARIO">FORMULARIO</option>
										<option value="LLAMAR LUEGO">LLAMAR LUEGO</option>
										<option value="INTERESADO">INTERESADO</option>								
										<option value="PROSPECTO CITADO">PROSPECTO CITADO</option>
										<option value="PROSPECTO PAGADO">PROSPECTO PAGADO</option>
									    <option value="PROSPECTO EN SEGUIMIENTO">PROSPECTO EN SEGUIMIENTO</option>
									    <option value="CLIENTE">CLIENTE</option>
									    <option value="ESTUDIO">ESTUDIO</option>
									    <option value="NO CONTACTADO">NO CONTACTADO</option>
									    <option value="FORMULARIO DEFECTUOSO">FORMULARIO DEFECTUOSO</option>
									    <option value="DESCARTADO">DESCARTADO</option>
										 
										 
								 
									</select>
								</div>
							</div>




<div class="col-xs-12 col-sm-2">
<div class="form-group">
<label for="basicInput">Agendar Cita Aqui <i class="fa fa-arrow-down"></i></label>
<button type="button" class="btn bg-orange" data-toggle="modal" data-target="#openAgenga">Calendario <i class="fa fa-calendar"></i></button>
</div>
</div>




<div class="col-xs-12 col-sm-2">
<div class="form-group">
<label for="basicInput">Enviar Email <i class="fa fa-arrow-down"></i></label>
<button type="button" class="btn bg-orange" data-toggle="modal" data-target="#openEnviarEmail">Enviar Email <i class="fa fa-send-o"></i></button>
</div>
</div>





</div>
						


						<div class="row">
							



						
						
							
							
							
							
								
								
								<div class="col-xs-12 col-sm-4">
																<div class="form-group">
																	<label for="basicInput">Nombres:</label>
											<input type="text" value="<?php echo $contactos_web[0]['nombres'] ?>" required class="form-control" name="nombres" id="nombres" placeholder="Nombres:">
																</div>
															</div>
								

								
									<div class="col-xs-12 col-sm-4">
																<div class="form-group">
																	<label for="basicInput">Apellidos:</label>
											<input type="text" value="<?php echo $contactos_web[0]['apellidos'] ?>" required class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos:">
																</div>
															</div>



															<div class="row customSelectWrap">
							<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>País</label>
									<select name="pais" class="js-select ">
									<option value="<?php echo $contactos_web[0]['pais'] ?>"  selected><?php echo $contactos_web[0]['pais'] ?></option>
										<option disabled >- Select país -</option>
										<option value="VENEZUELA">Venezuela</option>
										<option value="ESPANA">España</option>
											<option value="USA">Usa</option>
											<option value="OTRO">Otro</option>
								 
									</select>
								</div>
							</div>

							</div>


							</div>
							<div class="row">
							
						
						
							<div class="col-xs-12 col-sm-6">
														<div class="form-group">
															<label for="basicInput">E-mail:</label>
									<input type="email" value="<?php echo $contactos_web[0]['email'] ?>" required class="form-control" name="email" id="email" placeholder="E-mail:">
														</div>
													</div>


													<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="basicInput">Teléfono móvil:</label>
			<input type="text" value="<?php echo $contactos_web[0]['movil'] ?>" required class="form-control" name="movil" id="movil" placeholder="Teléfono móvil:">
								</div>
							</div>

						
</div>

<div class="row">
						<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Teléfono 2:</label>
			<input type="text" value="<?php echo $contactos_web[0]['movil2'] ?>" required class="form-control" name="movil2" id="movil2" placeholder="Teléfono 2:">
								</div>
							</div>


<div class="col-xs-12 col-sm-8">
							<div class="row">

<div class="col-md-6">
<div class="form-field-wrapper">
<label for="basicInput">Viajaré mes:</label>
<select name="mes_viaje" class="form-control">
<option value="<?php echo $contactos_web[0]['mes_viaje'] ?>"  selected><?php echo $contactos_web[0]['mes_viaje'] ?></option>
<option value="">- Viajaré mes -</option>
<option value="ENERO">ENERO</option>
<option value="FEBRERO">FEBRERO</option>
<option value="MARZO">MARZO</option>
<option value="ABRIL">ABRIL</option>
<option value="MAYO">MAYO</option>
<option value="JUNIO">JUNIO</option>
<option value="JULIO">JULIO</option>
<option value="AGOSTO">AGOSTO</option>
<option value="SEPTIEMBRE">SEPTIEMBRE</option>
<option value="OCTUBRE">OCTUBRE</option>
<option value="NOVIEMBRE">NOVIEMBRE</option>
<option value="DICIEMBRE">DICIEMBRE</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-field-wrapper">
<label for="basicInput">Viajaré año:</label>
<select name="anio_viaje" class="form-control">
<option value="<?php echo $contactos_web[0]['anio_viaje'] ?>"  selected><?php echo $contactos_web[0]['anio_viaje'] ?></option>
<option value="">- Viajaré año -</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
</select>
</div>
</div>
                                </div>
                                </div>


												
</div>

	<hr />
					<h2 class="boxHeadline">Pre información</h2>
					<h3 class="boxHeadlineSub"></h3>

			

			<?php $pre_info = unserialize($contactos_web[0]['pre_informacion']) ;

//print_r($pre_info);

			?>
 
				


			 
						<!-- Checkboxes -->
						<div class="row checkboxes">
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input  id="SOY CIUDADANO EUROPEO" name="pre_informacion[]" value="SOY CIUDADANO EUROPEO" type="checkbox">
									<span>Soy ciudadano europeo</span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<label>
								<input id="PRETENDO EMIGRAR" name="pre_informacion[]" value="PRETENDO EMIGRAR" type="checkbox">
										<span>Pretendo emigrar en <?php echo date(Y); ?></span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input id="NO SE CUANDO PODRE EMIGRAR" name="pre_informacion[]" value="NO SE CUANDO PODRE EMIGRAR" type="checkbox">
									<span>No sé cuándo podre emigrar</span>
								</label>
							</div>
						</div>
						
						<div class="row checkboxes">
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input id="YA HE VENDIDO MIS PROPIEDADES" name="pre_informacion[]" value="YA HE VENDIDO MIS PROPIEDADES" type="checkbox">
									<span>Ya he vendido mis propiedades</span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input id="ESTOY EN PROCESO DE VENTA DE MIS PROPIEDADES" name="pre_informacion[]"  value="ESTOY EN PROCESO DE VENTA DE MIS PROPIEDADES" type="checkbox">
									<span>Estoy en proceso de venta de mis propiedades</span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								
							</div>
						</div>
						<div class="row checkboxes">
							<div class="col-xs-12 col-sm-4 col-sm-offset-4 i">
							 
							</div>
							<div class="col-xs-12 col-sm-4 i">
								
							</div>
						</div>


						<!-- Break -->
						<hr />

			


						 
						
						

						<!-- Textarea -->
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<div class="form-group">
									<label  for="textarea1">¿Por qué escoge España como destino?</label>
									<textarea   id="por_que_escoge_destino_españa"  name="porque_espana" class="form-control" rows="8"> <?php echo $contactos_web[0]['porque_espana'] ?></textarea>
								</div>
							</div>
						
						</div>

						<hr />
						

						<div class="row">
							



	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">¿Cuál es su presupuesto para inversión?</label>
			<input type="number" value="<?php echo $contactos_web[0]['inversion'] ?>"  class="form-control" name="inversion" id="presupuesto_a_invertir" placeholder="¿Cuál es su presupuesto para inversión?">
								</div>
							</div>



						</div>
		<hr />
						<div class="row">
							
	<div class="row checkboxes">
							
<div class="alert alert-warning">
	
	<strong>Nota importante!</strong> ¿Entiende usted que el mínimo propuesto de inversión es 50.000€?
</div>

 
							<div class="col-xs-12 col-sm-12 i">
								<label>
									<input value="SOY CIUDADANO EUROPEO" name="entiendo" value="SI"  type="checkbox" checked="true">
									<span>

									Si, lo entiendo!



									</span>
								</label>
							</div>
							</div>

						</div>
					

				</div>

<div id="detalles">
				<div id="" class="box rte">
				<h2 class="boxHeadline">Datos personales y profesionales</h2>
					<h3 class="boxHeadlineSub">Formulario.</h3>

					<div class="row">
						


	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Documento:</label>
			<input type="text" value="<?php echo $contactos_web[0]['documento'] ?>"  class="form-control" name="documento" id="documento" placeholder="Documento:">
								</div>
							</div>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Nombre del Cliente Fiscal</label>
<input type="text" value="<?php echo $contactos_web[0]['cliente'] ?>"  class="form-control" name="cliente" id="cliente" placeholder="Nombre del Cliente Fiscal">
</div>
</div>


							
								<div class="col-xs-12 col-sm-4">
															<div class="form-group">
																<label for="basicInput">Fecha de nacimiento:</label>
										<input type="date" value="<?php echo $contactos_web[0]['fecha_nacimiento'] ?>"  class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de nacimiento:">
															</div>
														</div>


														
					

											</div>

<div class="row">
	
<div class="col-xs-12 col-sm-4">
												<div class="form-group">
													<label for="basicInput">Teléfono de oficina:</label>
							<input type="text" value="<?php echo $contactos_web[0]['telefono_oficina'] ?>" class="form-control" name="telefono_oficina" id="telefono_oficina" placeholder="Teléfono de oficina:">
												</div>
											</div>

	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Dirección de domicilio</label>
			<input type="text" value="<?php echo $contactos_web[0]['direccion_domicilio'] ?>"  class="form-control" name="direccion_domicilio" id="direccion_domicilio" placeholder="Dirección de domicilio">
								</div>
							</div>



							
								<div class="col-xs-12 col-sm-4">
															<div class="form-group">
																<label for="basicInput">Dirección de oficina</label>
										<input type="text" value="<?php echo $contactos_web[0]['direccion_oficina'] ?>"  class="form-control" name="direccion_oficina" id="direccion_oficina" placeholder="Dirección de oficina">
															</div>
														</div>

</div>

														<div class="row">
															


	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Titulación</label>
			<input type="text" value="<?php echo $contactos_web[0]['titulacion'] ?>"  class="form-control" name="titulacion" id="titulacion" placeholder="Titulación">
								</div>
							</div>




						
							<div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="basicInput">Año de experiencia laboral</label>
									<input type="number" value="<?php echo $contactos_web[0]['anos_laboral'] ?>"  class="form-control" name="anos_laboral" id="anos_laboral" placeholder="Año de experiencia laboral">
														</div>
													</div>
						
							</div>
							
<hr>

<div class="row">
	


	<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="basicInput">Monto mínimo de inversión</label>
			<input type="number" value="<?php echo $contactos_web[0]['monto_minimo_inversion'] ?>"  class="form-control" name="monto_minimo_inversion" id="monto_minimo_inversion" placeholder="Monto minimo de inversion">
								</div>
							</div>



	<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="basicInput">Monto máximo inversión:</label>
			<input type="number" value="<?php echo $contactos_web[0]['monto_maximo_inversion'] ?>"  class="form-control" name="monto_maximo_inversion" id="monto_maximo_inversion" placeholder="Monto máximo inversión:">
								</div>
							</div>



</div>
<hr>

<div class="row">
	



	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Ultima visita a España</label>
			<input type="date" value="<?php echo $contactos_web[0]['ultima_visita_espana'] ?>"  class="form-control" name="ultima_visita_espana" id="ultima_visita_espana" placeholder="Ultima visita a España">
								</div>
							</div>


							
								<div class="col-xs-12 col-sm-4">
															<div class="form-group">
																<label for="basicInput">Tiempo de estadía de la ultima visita</label>
										<input type="text" value="<?php echo $contactos_web[0]['tiempo_estadia_ultima_visita'] ?>"  class="form-control" name="tiempo_estadia_ultima_visita" id="tiempo_estadia_ultima_visita" placeholder="Tiempo de estadía de la ultima visita">
															</div>
														</div>





														
			<div class="col-xs-12 col-sm-4">



<div class="form-group">

<label for="basicInput">Ciudades visitadas</label>
<textarea name="ciudades__visitadas" id="ciudades__visitadas"  value="<?php echo $contactos_web[0]['ciudades__visitadas'] ?>" class="form-control"  rows="3" ><?php echo $contactos_web[0]['ciudades__visitadas'] ?></textarea>

</div>

 
</div>

	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Fecha estipulada de llegada a España</label>
			<input type="date" value="<?php echo $contactos_web[0]['fecha_estipulada_llegada_espana'] ?>"  class="form-control" name="fecha_estipulada_llegada_espana" id="fecha_estipulada_llegada_espana" placeholder="Fecha estipulada de llegada a España">
								</div>
							</div>
														
							



</div>


													








														
							


					

				</div><!-- ciero los detalles  -->
				


            



				<div id="" class="box rte">
				<h2 class="boxHeadline">Datos familiares.</h2>
					<h3 class="boxHeadlineSub">Formulario</h3>


<div class="row">
	


	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Nº Integrantes familiares:</label>
			<input type="number" value="<?php echo $contactos_web[0]['integrantes_familiar'] ?>"  class="form-control" name="integrantes_familiar" id="integrantes_familiar" placeholder="Nº Integrantes familiares:">
								</div>
							</div>




	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge Nombres:</label>
			<input type="text" value="<?php echo $contactos_web[0]['conyuge_nombres'] ?>"  class="form-control" name="conyuge_nombres" id="conyuge_nombres" placeholder="Conyuge Nombres:">
								</div>
							</div>






	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge Apellidos:</label>
			<input type="text" value="<?php echo $contactos_web[0]['conyuge_apellidos'] ?>"  class="form-control" name="conyuge_apellidos" id="conyuge_apellidos" placeholder="Cónyuge Apellidos:">
								</div>
							</div>



</div>


<div class="row">
	



	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge fecha de nacimiento:</label>
			<input type="date" value="<?php echo $contactos_web[0]['conyuge_fecha_nacimiento'] ?>"  class="form-control" name="conyuge_fecha_nacimiento" id="conyuge_fecha_nacimiento" placeholder="Conyuge fecha de nacimiento:">
								</div>
							</div>


<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge documento</label>
			<input type="text" value="<?php echo $contactos_web[0]['conyuge_documentos'] ?>"  class="form-control" name="conyuge_documentos" id="conyuge_documentos" placeholder="Conyuge documento">
								</div>
							</div>




	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge tel. Móvil</label>
			<input type="text" value="<?php echo $contactos_web[0]['conyuge_tel_movil'] ?>"  class="form-control" name="conyuge_tel_movil" id="conyuge_tel_movil" placeholder="Conyuge telf. Movil">
								</div>
							</div>


</div>

<div class="row">
	


	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge tel. Oficina</label>
			<input type="text" value="<?php echo $contactos_web[0]['conyuge_tel_oficina'] ?>"  class="form-control" name="conyuge_tel_oficina" id="conyuge_tel_oficina" placeholder="Conyuge tel. Oficina">
								</div>
							</div>



							
								<div class="col-xs-12 col-sm-4">
															<div class="form-group">
																<label for="basicInput">Cónyuge email:</label>
										<input type="email" value="<?php echo $contactos_web[0]['conyuge_email'] ?>"  class="form-control" name="conyuge_email" id="conyuge_email" placeholder="Cónyuge email:">
															</div>
														</div>
								


</div>

<hr>
<h2 class="boxHeadline">Numero de hijos.</h2>
<button type="button" id="agregar_hijos" class="btn bg-green">Agregar <i class="fa fa-plus"></i></button>
<button type="button" id="remove_hijos" class="btn bg-red">Remover <i class="fa fa-eraser"></i></button>

<?php 

$pre_hijos = unserialize($contactos_web[0]['hijos_nombre']) ;
$pre_apellidos = unserialize($contactos_web[0]['hijos_apellidos']) ;
$pre_nacimiento = unserialize($contactos_web[0]['hijos_fecha_nacimiento']) ;
$pre_documentos = unserialize($contactos_web[0]['hijos_documentos']) ;

//print_r($pre_hijos);
if (is_array($pre_hijos)){
foreach ($pre_hijos as $key => $value) {
//	echo $pre_hijos[$key];
//	echo $pre_apellidos[$key];
	//echo $pre_nacimiento[$key];
	//echo $pre_documentos[$key];

			?>


			<div class="phpconsulta item_hijos">
	<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label for="basicInput">Hijo Nombre</label>
			<input type="text" value="<?php echo $pre_hijos[$key]; ?>"  class="form-control" name="hijos_nombre[]" id="hijos_nombre[]" placeholder="Hijo Nombre">
								</div>
							</div>


							
								<div class="col-xs-12 col-sm-3">
															<div class="form-group">
																<label for="basicInput">Hijo Apellido</label>
										<input type="text" value="<?php echo $pre_apellidos[$key]; ?>"  class="form-control" name="hijos_apellidos[]" id="hijos_apellidos[]" placeholder="Hijo Apellido">
															</div>
														</div>
							



	<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label for="basicInput">Hijo fecha de nacimiento</label>
			<input type="date" value="<?php echo $pre_nacimiento[$key]; ?>"  class="form-control" name="hijos_fecha_nacimiento[]" id="hijos_fecha_nacimiento[]" placeholder="Hijo fecha de nacimiento">
								</div>
							</div>



							
								<div class="col-xs-12 col-sm-3">
															<div class="form-group">
																<label for="basicInput">Hijo documento</label>
										<input type="text" value="<?php echo $pre_documentos[$key]; ?>"  class="form-control" name="hijos_documentos[]" id="hijos_documentos[]" placeholder="Hijo documento">
															</div>
														</div>


</div><!-- php consual -->


<?php }}
 ?>

<div id="hijos" class="row">
</div>

							
<div class="row" id="mas_hijos">
	


</div>



<hr>

<div class="doc_ajuntos">
<h3>Documentos adjuntos</h3>
<?php $pre_adjunto = unserialize($contactos_web[0]['imagenes']) ;

if  (is_array($pre_adjunto )){
foreach ($pre_adjunto as $key => $value) {
	





 ?>



<button type="button" class="btn bg-red borrar" data-nombre="<?php echo $value ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>


<a class="btn btn-large  bg-green" data-nombre="<?php echo $value ?>" target="_blank"  href="file-upload/contactos-documentos/<?php echo $value ?>" role="button"> <i class="fa fa-download"></i> <?php echo $value ?></a>

<input type="hidden" name="imagenes[]" value="<?php echo $value ?>" id="" data-nombre="<?php echo $value ?>" class="imageninput" placeholder="Texto">

<?php } }?>

</div>
<hr>
<div class="row">
	
	<label for="comentarios_sobre_negocio"><i class="fa fa-image" style="font-size: 30px;
    color: #fe5621;"></i> Cargar imagen: (20 Archivos permitidos) image/*, .pdf</label>
<div id="dZUpload" class="dropzone" style=" border-color: #e6e7ed;border-left: 3px solid #4bae4f;  " >
<div class="dz-default dz-message"></div>
</div>
<div id="img"></div>

</div>
	

				</div><!-- BOX FAMILIARES -->




				<div id="" class="box rte">
				<h2 class="boxHeadline">Ficha de opciones.</h2>
					<h3 class="boxHeadlineSub">Formulario</h3>



<?php 

$sector_array  = array  ('Agricultura', 'Alimentación', 'Animales Domésticos', 'Artes Gráficas', 'Asegurador', 'Comercio', 'Construcción', 'Decoración', 'Deportes', 'Dietética', 'Electrónica', 'Estética / Cosmética', 'Farmacia', 'Financiero', 'Ganadería', 'Industria Alimentaria', 'Industria Textil', 'Informática', 'Inmobiliario', 'Moda', 'Ocio/Tiempo Libre', 'Restauración', 'Servicios', 'Transporte');
 ?>






<?php foreach ($sector_array   as $value) {
	
 ?>
<!-- qui aqui van las opciones -->


<?php }
	
 ?>
							 
<div class="row">

	<div class="col-xs-12 col-sm-4 ">
								<div class="form-group">
									<label>Opcion 1</label>
									<select name="opcion1" class="js-select ">
									<option  selected value="<?php echo $contactos_web[0]['opcion1'] ?>"><?php echo $contactos_web[0]['opcion1'] ?></option>
										
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>


									
								 
									</select>
								</div>

<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="opcion_1_tipo[]" class="o1" data-nombre="FRANQUICIA" value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="opcion_1_tipo[]" class="o1" data-nombre="PYME" value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>
							</div>

								<div class="col-xs-12 col-sm-4 ">
								<div class="form-group">
									<label>Opcion 2</label>
									<select name="opcion2" class="js-select ">
											<option  selected value="<?php echo $contactos_web[0]['opcion2'] ?>"><?php echo $contactos_web[0]['opcion2'] ?></option>
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>
								 
									</select>
								</div>

<?php 

$opcion_tipo_1 = unserialize($contactos_web[0]['opcion_tipo_1']) ;
$opcion_tipo_2 = unserialize($contactos_web[0]['opcion_tipo_2']) ;
$opcion_tipo_3 = unserialize($contactos_web[0]['opcion_tipo_3']) ;
//print_r($opcion_tipo_2);

			?>
								<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o2" name="opcion_2_tipo[]" data-nombre="FRANQUICIA" value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o2" name="opcion_2_tipo[]" data-nombre="PYME" value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>
							</div>


								<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label>Opcion 3</label>
									<select name="opcion3" class="js-select ">
											<option  selected value="<?php echo $contactos_web[0]['opcion3'] ?>"><?php echo $contactos_web[0]['opcion3'] ?></option>
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>
								 
									</select>
								</div>

								<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="opcion_3_tipo[]" class="o3" data-nombre="FRANQUICIA"  value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="opcion_3_tipo[]"  class="o3" data-nombre="PYME"  value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>

							</div>
						
						 
						
						</div> 
						<hr>


<!--====================================================
=            ESTA ES LA SESSION DEL 4 AL 6             =
=====================================================-->







						<div class="row">

	<div class="col-xs-12 col-sm-4 ">
								<div class="form-group">
									<label>Opcion 4</label>
									<select name="opcion4" class="js-select ">
									<option  selected value="<?php echo $contactos_web[0]['opcion4'] ?>"><?php echo $contactos_web[0]['opcion4'] ?></option>
										
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>


									
								 
									</select>
								</div>

<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="opcion_4_tipo[]" class="o4" data-nombre="FRANQUICIA" value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="opcion_4_tipo[]" class="o4" data-nombre="PYME" value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>
							</div>

								<div class="col-xs-12 col-sm-4 ">
								<div class="form-group">
									<label>Opcion 5</label>
									<select name="opcion5" class="js-select ">
											<option  selected value="<?php echo $contactos_web[0]['opcion5'] ?>"><?php echo $contactos_web[0]['opcion5'] ?></option>
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>
								 
									</select>
								</div>

<?php 

$opcion_tipo_4 = unserialize($contactos_web[0]['opcion_tipo_4']) ;
$opcion_tipo_5 = unserialize($contactos_web[0]['opcion_tipo_5']) ;
$opcion_tipo_6 = unserialize($contactos_web[0]['opcion_tipo_6']) ;
//print_r($opcion_tipo_2);

			?>
								<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o5" name="opcion_5_tipo[]" data-nombre="FRANQUICIA" value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o5" name="opcion_5_tipo[]" data-nombre="PYME" value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>
							</div>


								<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label>Opcion 6</label>
									<select name="opcion6" class="js-select ">
											<option  selected value="<?php echo $contactos_web[0]['opcion6'] ?>"><?php echo $contactos_web[0]['opcion6'] ?></option>
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>
								 
									</select>
								</div>

								<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="opcion_6_tipo[]" class="o6" data-nombre="FRANQUICIA"  value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="opcion_6_tipo[]"  class="o6" data-nombre="PYME"  value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>

							</div>
						
						 
						
						</div> 

						<!--====  End of ESTA ES LA SESSION DEL 4 AL 6   ====-->



</div><!-- FICHA DE OPCIONES -->

</div> <!-- CIERRO LOS DIV OCULTOS -->




				<div class="box rte">
				<center>

<button type="button" value="" id="detalle_btn" class="btn bg-dark-gray">Ver Detalles <i class="fa fa-eye"></i></button>
<a type="button" href="seguimiento.php?id=<?php echo $contactos_web[0]['id'] ?>" target="_blank" value="Seguimientos" class="btn bg-orange">Seguimiento <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>

<input type="reset" value="Reset" class="btn bg-gray">
						<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary">Guardar <i class="fa fa-save"></i></button>
						</center>



					
				</div>


			</div>	<!-- Page content -->
		</div><!-- pageContent -->
	</div><!-- pageWrap -->
</form>
	<!-- JS -->
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

<div class="modal fade" id="openAgenga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span id="exampleModalLabel" aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >Agenda una cita</h4>
      </div>
      <div class="modal-body">
        <form id="formulario_agendar_cita">
        <label for="datepicker-2-input">Cita.</label>
         <select name="tipo" id="tipo" required class="js-select" style="width:100%;">
								 
										<option value="" >- Seleccione -</option>
										<option value="CITA PRESENCIAL">CITA PRESENCIAL</option>
										<option value="CITA VIRTUAL">CITA VIRTUAL</option>
									<option value="SEGUNDA CITA">SEGUNDA CITA</option>
									<option value="CITA OFICINA ESPANA">CITA OFICINA ESPAÑA</option>		 
								 	<option value="CITA DE SEGUIMIENTO">CITA DE SEGUIMIENTO</option>
								 		<option value="CONTACTO DE CALENDARIO">CONTACTO DE CALENDARIO</option>
									</select>
									<br><br>


<div class="form-group">
									<label for="textarea-autosize">Descripción</label>
									<textarea id="descripcion" name="descripcion" class="js-autogrow form-control" placeholder="Escriba comentarios sobre la cita...!" rows="2" style="overflow: hidden; word-wrap: break-word; height: 74px;"></textarea>
								</div>

							<hr>	

          	<div class="col-xs-12">

								<label for="datepicker-2-input">Consulte día disponible.</label>
								<div id="datepicker-2" class="input-group date">
									<input   class="form-control" id="diaSelect" name="dia" placeholder="Select date" type="date"><span id="consultarDia" class="input-group-addon"><i class="fa fa-search" ></i></span>
								</div>
							</div>

							<div id="agendados"></div>


<div class="row">

<div class="col-xs-6">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Inicio:</label>
            <input type="time" placeholder="hrs:mins" name="start" required  class="form-control" id="recipient-name">
          </div>
</div>
<div class="col-xs-6">
          <div class="form-group">
            <label for="message-text" class="control-label">Final:</label>
             <input type="time" placeholder="hrs:mins" name="end"  required  class="form-control" id="recipient-name">
          </div>
          </div>
        
</div>

<div class="col-xs-12">
<div class="checkboxes">								


								<label>
									<input id="allDay" name="allDay" value="1" type="checkbox">
									<span>Evento para todo el dia?</span>
								</label>
							</div>
</div>


<input type="hidden" name="id_contacto" value="<?php echo $id ?>">
<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['usuario']['Id']; ?>">
<input type="hidden" name="color" value="<?php echo $_SESSION['usuario']['Color']?>">
<input type="hidden" name="titulo" value="<?php echo $contactos_web[0]['nombres'].' '.$contactos_web[0]['apellidos'] ?>">
<input type="hidden" name="nombre" value="<?php echo $contactos_web[0]['nombres'].' '.$contactos_web[0]['apellidos'] ?>">

	

     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
     <button type="submit" id="agendar" disabled class="btn btn-primary" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando...!"> Agendar   </button>
      </div>

         </form>
      </div>
    </div>
  </div>
</div>




<!--=====================================
=            Section comment  enviar email          =
======================================-->
<div class="modal fade" id="openEnviarEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span id="exampleModalLabel" aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >Seleccionar tipo de envío</h4>
      </div>
      <div class="modal-body">
        <form id="enviarEmail">
           

						<div class="row">
<div id="cargando"  ><center><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>Cargando...</center></div>

							<div class="col-xs-12  ">
								<div class="form-group">
									<label>Tipo</label>
									 <select name="tipoEmail" id="tipoEmail" class="js-select" style="width:100%;">
								 
										<option value="" >- Seleccione tipo -</option>
										<option value="CITA PRESENCIAL">CITA PRESENCIAL</option>
										<option value="CITA VIRTUAL">CITA VIRTUAL</option>
										<option value="INTERESADO">INTERESADO/A</option>
										<option value="NO CONTACTADO">NO CONTACTADO</option>
											 
								 
									</select>
									</div>
									</div>
</div>	

<div class="row">
		<div class="radiobuttons" id="radioBtnCitas">
							
							
						
						</div>


</div>
 
<!--  $nombres = 'Douglas';
$apellidos = 'Nieves';
$email = "douglasjosenieves@gmail.com";
$fechaCita = '24/09/2016 09:00';
$ejecutivoCaracas ='Sr. Erick Lárez';
$ejecutivoMadrid = 'Sr. Elvin Castillo';
$emailAsesor= 'erick.larez@cohenyaguirre.es';
$montoCita = '45.000 BsF';
$id_contacto= '5'; -->


<input type="hidden" name="nombres" value="<?php echo $contactos_web[0]['nombres']?>">
<input type="hidden" name="apellidos" value="<?php echo $contactos_web[0]['apellidos']?>">
<input type="hidden" name="email" value="<?php echo $contactos_web[0]['email']?>">


<input type="hidden" id="elaborado_por" name="elaborado_por" value="<?php echo $_SESSION['usuario']['Id']?>">
<input type="hidden" id="ejecutivoCaracas" name="ejecutivoCaracas" value="<?php echo ucwords($_SESSION['usuario']['Nombre'].' '.$_SESSION['usuario']['Apellido'])?>">
<input type="hidden" id="emailAsesor" name="emailAsesor" value="<?php echo $_SESSION['usuario']['Email']?>">
<input type="hidden" id="ejecutivoTel" name="ejecutivoTel" value="<?php echo $_SESSION['usuario']['Telefono']?>">

<input type="hidden" id="id_contacto" name="id_contacto" value="<?php echo $id ?>">
     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
     <button type="submit" id="emailsend" disabled  class="btn btn-primary" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando...!"> Enviar  </button>
      </div>

         </form>
      </div>
    </div>
  </div>
</div>



<!--====  End of Section comment enviar email ====-->



</body>





<script type="text/javascript">



/*===============================================
=            Para el envio de correo            =
===============================================*/

$(document).ready(function() {

	$('#cargando').hide();
	$('#tipoEmail').on('change', function(event) {
		event.preventDefault();
		//console.log($(this).val());
	

mivar1 = $(this).val();


if (mivar1 == 'CITA VIRTUAL' || mivar1 == 'CITA PRESENCIAL'  ) {

console.log(mivar1);
buscarCitas();

}

else {
$('#emailsend').removeAttr('disabled');

}



	});


function buscarCitas() {



$('#cargando').show();
var cliente = $('#id_contacto').val();

//alert(cliente);

$('#cargando').show();
$.ajax({
	url: 'async/calendarioEmail.php',
	type: 'POST',
	
	data: {cliente: cliente},
})
.done(function(data) {
	console.log("success");
console.log(data);
$('#radioBtnCitas').html(data);


})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
	$('#cargando').hide();
	$('#emailsend').removeAttr('disabled');
});



}



/*==============================================================
=            Al darle envia a formulario_EnvioEmail            =
==============================================================*/

$('#enviarEmail').on('submit', function(event) {
	event.preventDefault();
	


	var elije =  $('#tipoEmail').val();
	
	/* Act on the event */

	if (elije=='CITA PRESENCIAL') {

		var archive='envios/notiEmail/citaPresencial.php'
	} 

	if (elije=='CITA VIRTUAL') {

		var archive='envios/notiEmail/citaVirtual.php'
	} 

if (elije=='NO CONTACTADO') {

		var archive='envios/notiEmail/noContactado.php'
	} 

if (elije=='INTERESADO') {

		var archive='envios/notiEmail/citaInteresados.php'
	} 


//citaInteresados.php

///alert(archive);
$('#emailsend').button('loading');

$.ajax({
	url: archive,
	type: 'POST',
	 
	data: $('#enviarEmail').serialize(),
})
.done(function(data) {
	console.log("success");
	console.log(data);



	if (data==1) {

swal({ 
  title: "Good job! ",
   text: "Envio de correo con exito...!",
    type: "success" 
  },
  function(){
$('#enviarEmail')[0].reset();
$('#openEnviarEmail').modal('hide');
//location.reload();
 
});


}

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
	$('#emailsend').button('reset');
});


});

/*=====  End of Al darle envia a formulario_EnvioEmail  ======*/





});

/*=====  End of Para el envio de correo  ======*/


	
$(document).ready(function() {
	

$('#formulario_agendar_cita').on('submit',  function(event) {
	event.preventDefault();
$('#agendar').button('loading');

	$.ajax({
		url: 'envios/calendario-insert.php',
		type: 'POST',
 
		data: $('#formulario_agendar_cita').serialize(),
	})
	.done(function(data) {
		console.log("success");
		console.log(data);

if (data==1) {

swal({ 
  title: "Good job! ",
   text: "Cita agendada con éxito...!",
    type: "success" 
  },
  function(){
$('#formulario_agendar_cita')[0].reset();
//location.reload();
$('#agendados').html('');
});


}


	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
		$('#agendar').button('reset');
	});
	
	/* Act on the event */
});




$('#consultarDia').on('click',  function(event) {
	event.preventDefault();
		$('#agendados').html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>Cargando...');
	/* Act on the event */
var diaSelect = $('#diaSelect').val();

 if (diaSelect == '') {
 	alert('Coloque una fecha a consultar!' );
 $('#agendados').html('');
 return true;
}


 

$.ajax({
	url: 'async/calendarioDiasDisponible.php',
	type: 'POST',

	data: {dia: diaSelect},
})
.done(function(data) {
	console.log("success");
		console.log(data);
		$('#agendados').html(data);

		$('#agendar').removeAttr('disabled');
$('')

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});


});

});


</script>
	<script type="text/javascript">



 
$(document).ready(function() {


var opcion1=<?php echo json_encode($opcion_tipo_1);?>;

if (opcion1!='') {
 
 //console.log(opcion1);

if (opcion1!=null) {
for(var i=0;i<opcion1.length;i++)
    {
       console.log(opcion1[i]);
   

$('.o1[data-nombre="'+opcion1[i]+'"]').prop("checked", "checked");


    }
 
}

}
var opcion2=<?php echo json_encode($opcion_tipo_2);?>;

if (opcion2!='') {
if (opcion2!=null) {
for(var i=0;i<opcion2.length;i++)
    {
        console.log(opcion2[i]);
   

$('.o2[data-nombre="'+opcion2[i]+'"]').prop("checked", "checked");


    }

}
}
    var opcion3=<?php echo json_encode($opcion_tipo_3);?>;

if (opcion3!='') {
if (opcion3!=null) {


for(var i=0;i<opcion3.length;i++)
    {
        console.log(opcion3[i]);
   

$('.o3[data-nombre="'+opcion3[i]+'"]').prop("checked", "checked");


    }

}}


    var opcion4=<?php echo json_encode($opcion_tipo_4);?>;
    if (opcion4!='') {
if (opcion4!=null) {
for(var i=0;i<opcion4.length;i++)
    {
        console.log(opcion4[i]);
   

$('.o4[data-nombre="'+opcion4[i]+'"]').prop("checked", "checked");


    }

}

}
    
    var opcion5=<?php echo json_encode($opcion_tipo_5);?>;
    if (opcion5!='') {
if (opcion5!=null) {
for(var i=0;i<opcion5.length;i++)
    {
        console.log(opcion5[i]);
   

$('.o5[data-nombre="'+opcion5[i]+'"]').prop("checked", "checked");


    }

}
}
    var opcion6=<?php echo json_encode($opcion_tipo_6);?>;
    if (opcion6!='') {
if (opcion6!=null) {
for(var i=0;i<opcion6.length;i++)
    {
        console.log(opcion6[i]);
   

$('.o6[data-nombre="'+opcion6[i]+'"]').prop("checked", "checked");


    }

}
}



var arrayJS=<?php echo json_encode($pre_info);?>;
	if (arrayJS!='') {
	if (arrayJS!=null) {
  for(var i=0;i<arrayJS.length;i++)
    {
        console.log(arrayJS[i]);
   

$('[id="'+arrayJS[i]+'"]').prop("checked", "checked");

    }
 
	
}}


$('#agregar_hijos').on('click',  function(event) {
	event.preventDefault();
console.log('Le di clck a agregar hijos');


$.get("forms-contacto-hijos.php"   ,function (dados) { 
$("#hijos").append(dados);});
	/* Act on the event */
});


$('#remove_hijos').on('click',  function(event) {
	event.preventDefault();
console.log('Le di clck a remove hijos');


  var n = $( ".item_hijos" ).length;
 
console.log(n);


$('.item_hijos:last').remove();

});

	
});
 
/*================================
=            DROPZONE            =
================================*/


    Dropzone.autoDiscover = false;
jQuery(document).ready(function() {
 var fileList = new Array;
 var i =0;
 var date = moment().format('DDMYYYY');
//alert(date);
 
 
myDropzone = new Dropzone("#dZUpload", { 
    url: 'upload-documentos-contactos.php',
    dictDefaultMessage: "your custom message",
    autoProcessQueue:true, //BARRRA DE CARGA 
    maxFilesize: 30, // MB
    maxFiles: 200, //CANTIDAD DE ARCHIVOS PERMITIDOS
    addRemoveLinks: true, ///MOSTRAR EL LINK DE REMOVER IMAGEN
    acceptedFiles: 'image/*,.pdf,.doc,.docx,.xlsx,.xls', //SOLO ACEPTAR IMAGEN FORMATO
    success: function (file, serverFileName) {
    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                        console.log(fileList);
                        i++; 	
   console.log(serverFileName);
    	 swal("Good job!", "Uploas a imagen!", "success");
 
    	   $('#img').append('<div><input type="hidden" name="imagenes[]" value="'+serverFileName+'"id="" class="imageninput" placeholder="Texto"/></div>');
    	  return file.previewElement.classList.add("dz-success");
       // console.log("Sucesso");
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
                               url: "delete-documentos-contactos.php",
                                type: "POST",
                                data: { "name" : rmvFile }
                            });
                           $('#img :input[value="'+rmvFile+'"]').remove();
                        }
                    

 


return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
				

    },


 
  });


/*=====  End of DROPZONE  ======*/
   
});
 


$(document).ready(function() {


$('.borrar').on('click',  function(event) {
	event.preventDefault();
var archivo = $(this).attr('data-nombre');
console.log(archivo);
	/* Act on the event */


$.ajax({
	url: 'delete-documentos-contactos.php',
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

$('#detalles').hide();
$('#detalle_btn').on('click', function(event) {
	event.preventDefault();

$('#detalles, #generales').toggle('slow');

	/* Act on the event */
});
	


 

	console.log("ready");

$('#formulario').on('submit', function(e){
e.preventDefault();
$('#boton').button('loading');
console.log('Envio el formulario');

$.ajax({
	url: 'envios/form-fichas-contacto-editar.php',
	type: 'POST',
	//dataType: 'json',
	data: $('#formulario').serialize(),
})
.done(function(data) {
	console.log(data);
	//console.log("success");
  if (data==1) {
document.getElementById("formulario").reset();

 
  $('#img :input').remove();

swal({ 
  title: "Good job!",
   text: "You clicked the button!",
    type: "success" 
  },
  function(){
   location.reload();
   // window.location.href = 'login.html';
});

}
else{

sweetAlert("Oops...", "Something went wrong!", "error");
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

	</script>
<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:59 GMT -->
</html>