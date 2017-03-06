<?php session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');

}
require_once __DIR__ . '../../db_connect.php';



$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  

$usuario = $_SESSION['usuario']['Id'];
$filtro = $_GET['filtro'];
$asesor = $_GET['asesor'];



if ($filtro=='individual') {
	$resul =  mysql_query("SELECT distinct status, count(status) as cuenta FROM contactos_web where anulado <> 1 and elaborado_por = $usuario group by status;");
}


else {

$resul =  mysql_query("SELECT distinct status, count(status) as cuenta FROM contactos_web where anulado <> 1 group by status;");

}


if($asesor != ''){

$resul =  mysql_query("SELECT distinct status, count(status) as cuenta FROM contactos_web where anulado <> 1 and elaborado_por = $asesor group by status;");

}

 





 $st = 0;
$status = array();
 
while($row =  mysql_fetch_array($resul) ) {
$status[$row['status']] = $row['cuenta'];
 }



$v=0;
	/*<option value="ESPANA">España</option>*/
$teleo ='';
$teleoid =array();
				$resulv =  mysql_query("SELECT * FROM usuarios where anulado <> 1 and cargo = 'teleoperador'");
				while($rowv =  mysql_fetch_array($resulv) ) { 
$teleo .= '<li><a href="?asesor=';
$teleo .= $rowv['id'];
$teleo .= '"title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i>';
$teleo .= strtoupper($rowv['nombre'].' '.$rowv['apellido']);
$teleo .= '</a></li>';
$teleoid[] = $rowv['id'];

            
            //$teleoperador['teleoperador'][]=$row;
					$v++;}
 
 ?>






<!doctype html>
<html class="no-js" lang="es">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:05:06 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Interprise | Cohen Aguirre</title>
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
		<!-- html comment <link rel="stylesheet" href="assets/css/fontello.css">-->
	<link rel="stylesheet" href="assets/css/chartist.min.css">
	<link rel="stylesheet" href="assets/css/app.min.css">
		<link rel="stylesheet" href="assets/css/fullcalendar.min.css">
	<link rel="stylesheet" href="assets/css/fullcalendar.print.css" media='print'>
   
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
	
	<aside class="aside">
		<!-- User profile -->
		<?php require_once 'usuario.php'; ?>
         <?php require_once 'nav.php'; ?>
		
		<!-- Pending tasks -->
		<div class="progessInfo hidden-xs hidden-sm">
			<h2 class="boxTitle">Tareas pendientes <span class="badge">8</span></h2>

			<ul>
				<li>
					<div class="title">Calendar</div>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
							<span class="sr-only">85% Complete</span>
						</div>
					</div>
				</li>
				<li>
					<div class="title">Breadcrumbs</div>
					<div class="progress">
						<div class="progress-bar progress-bar-striped bg-green active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
							<span class="sr-only">60% Complete</span>
						</div>
					</div>
				</li>
				<li>
					<div class="title">FAQ</div>
					<div class="progress">
						<div class="progress-bar progress-bar-striped bg-blue active" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%;">
							<span class="sr-only">17% Complete</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</aside>
	
	<!-- Page Wrap -->
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<div class="boxHeader pageBoxHeader clearfix">
					<div class="pull-left">
						<h1 class="pageTitle">
							<a href="#" title="#">Panel de control <?php// echo print_r($status) ?>
</a>
						</h1>
						<ol class="breadcrumb">
							<li><a href="index.php">Sharpen</a></li>
							<li class="active">Dashboard</li>
						</ol>
					</div>

					<div class="btn-group pull-right boxHeaderOptions">
						<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="zmdi zmdi-more-vert"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="?filtro=todas" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Todas</a></li>
							<li><a href="?filtro=individual" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Mi gestión</a></li>
							
<?php  if ($_SESSION['usuario']['Tipo'] == 'administrador') {?>
							 <?php echo $teleo  ?>
<?php } ?>

						</ul>
					</div>
				</div>
				

				<!-- Statsbar -->
				<div class="statsBar">
					<div class="row">
						<div class="col-xs-12 col-md-3 i yellow">
							<a href="reporte-clientes-usuario.php?status=formulario" title="#" class="c">
								<h3 class="title">Formularios</h3>
			<div class="num" id="repFormularios"><?php  echo (isset($status['FORMULARIO'])) ? $status['FORMULARIO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-border-color"></i>
								 
							</a>
						</div>
<div class="col-xs-12 col-md-3 i luego">
							<a href="reporte-clientes-usuario.php?status=LLAMAR LUEGO" title="#" class="c">
								<h3 class="title">LLAMAR LUEGO</h3>
								<div class="num" id="repProsPagados"><?php  echo (isset($status['LLAMAR LUEGO'])) ? $status['LLAMAR LUEGO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-phone-forwarded"></i>
							</a>
						</div>

						     <div class="col-xs-12 col-md-3 i interesados">
							<a href="reporte-clientes-usuario.php?status=interesado" title="#" class="c">
								<h3 class="title">Interesado</h3>
								<div class="num" id="repProsPagados"><?php  echo (isset($status['INTERESADO'])) ? $status['INTERESADO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-alert-polygon"></i>
							</a>
						</div>


						<div class="col-xs-12 col-md-3 i pink">
							<a href="reporte-clientes-usuario.php?status=PROSPECTO CITADO" title="#" class="c">
								<h3 class="title">Pros. Citados</h3>
								<div class="num" id="repProsCitados"><?php  echo (isset($status['PROSPECTO CITADO'])) ? $status['PROSPECTO CITADO']  :  '0';  ?></div>
								<i class="icon zmdi-check"></i>
							</a>
						</div>
						

		       



					</div>
				</div>
	     
	     <div class="statsBar2">
	     	<div class="row">

	     		<div class="col-xs-12 col-md-4 i pagado">
							<a href="reporte-clientes-usuario.php?status=PROSPECTO PAGADO" title="#" class="c">
								<h3 class="title">Pros. Pagados</h3>
								<div class="num" id="repProsPagados"><?php  echo (isset($status['PROSPECTO PAGADO'])) ? $status['PROSPECTO PAGADO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-check-all"></i>
							</a>
						</div>


						<div class="col-xs-12 col-md-4 i yellow2">
							<a href="reporte-clientes-usuario.php?status=prospecto en seguimiento" title="#" class="c">
								<h3 class="title">Pros. Seguimiento</h3>
								<div class="num" id="clientes"><?php  echo (isset($status['PROSPECTO EN SEGUIMIENTO'])) ? $status['PROSPECTO EN SEGUIMIENTO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-eye"></i>
							</a>
						</div>
					
						<div class="col-xs-12 col-md-4 i yellow">
							<a href="reporte-clientes-usuario.php?status=cliente" title="#" class="c">
								<h3 class="title">Clientes</h3>
								<div class="num" id="clientes"><?php  echo (isset($status['CLIENTE'])) ? $status['CLIENTE']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-account-box"></i>
							</a>
						</div>
		 
					
				</div>
</div>






<div class="statsBar3">
	     	<div class="row">

	     		<div class="col-xs-12 col-md-4 i cfexito" title="cliente finalizado con exito">
							<a href="reporte-clientes-usuario.php?status=CFEXITO" title="cliente finalizado con exito" class="c">
								<h3 class="title">C.F con éxito</h3>
								<div class="num" id="repProsPagados"><?php  echo (isset($status['CFEXITO'])) ? $status['CFEXITO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-accounts-list-alt"></i>
							</a>
						</div>


						<div class="col-xs-12 col-md-4 i cfdescartado" title="Cliente finalizado descartado">
							<a href="reporte-clientes-usuario.php?status=CFDESCARTADO" title="Cliente finalizado descartado" class="c">
								<h3 class="title">C.F descartado</h3>
								<div class="num" id="clientes"><?php  echo (isset($status['CFDESCARTADO'])) ? $status['CFDESCARTADO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-close"></i>
							</a>
						</div>
					
						<div class="col-xs-12 col-md-4 i tramitelegal">
							<a href="reporte-clientes-usuario.php?status=TRAMITELEGAL" title="Tramite legal" class="c">
								<h3 class="title">Tramite legal</h3>
								<div class="num" id="TRAMITELEGAL"><?php  echo (isset($status['TRAMITELEGAL'])) ? $status['TRAMITELEGAL']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-assignment"></i>
							</a>
						</div>
				 
						
					
				</div>
</div>



	     <div class="statsBar2">
	     	<div class="row">
				 
				 <div class="col-xs-12 col-md-4 i green2">
							<a href="reporte-clientes-usuario.php?status=no contactado" title="#" class="c">
								<h3 class="title" id="descartados">No contactado</h3>
								<div class="num"><?php  echo (isset($status['NO CONTACTADO'])) ? $status['NO CONTACTADO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-phone-missed"></i>
							</a>
						</div>
						<div class="col-xs-12 col-md-4 i pink2">
							<a href="reporte-clientes-usuario.php?status=formulario defectuoso" title="#" class="c">
								<h3 class="title">Form. Defectuoso</h3>
								<div class="num" id="estudios"><?php  echo (isset($status['FORMULARIO DEFECTUOSO'])) ? $status['FORMULARIO DEFECTUOSO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-close"></i><i class="icon zmdi zmdi-text-format"></i>
							</a>
						</div>
						<div class="col-xs-12 col-md-4 i green">
							<a href="reporte-clientes-usuario.php?status=descartado" title="#" class="c">
								<h3 class="title" id="descartados">Descartados</h3>
								<div class="num"><?php  echo (isset($status['DESCARTADO'])) ? $status['DESCARTADO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-block-alt"></i>
							</a>
						</div>
					</div>
				</div>
</div>

				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="box box-without-padding">
                    

<div id='calendario'></div>
                    </div>
							
					</div>
					


					<div class="col-xs-12 col-md-6">

					<div class="col-xs-12 box">
	<?php require_once 'usuariosGet.php'; ?>
<div class="box box-without-padding">
									<div class="clearfix boxHeader">
										<h2 class="boxTitle pull-left">Chat Interno</h2>
										<div class="btn-group pull-right boxHeaderOptions">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="zmdi zmdi-more-vert"></i>
											</button>
											<ul class="dropdown-menu">
												
												<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
											</ul>
										</div>

									</div>

<div class="form-group">
									<label for="textarea1">Mensajes</label>
									<textarea id="textareaMensaje" readonly class="form-control" rows="11"> </textarea>
								</div>

<form id="formChat">
								<div class="row">
										<div class="col-xs-12 col-sm-12 i">
								<div class="form-group">
									<label>Para:</label>
									<select name="para" required class="js-select" id="usuariosActivoSelect">
										<option  value="">- Enviar a -</option>
										<?php echo $teleo; ?>
										<option value="0">TODOS</option>
									</select>
									
								</div>
							</div>

								</div>


								<div class="row">
								<div class="col-xs-12 col-sm-9">
								<div class="form-group">
								 
									<input type="text" required name="mensaje"  class="form-control" id="basicInput" placeholder="Su mensaje aqui...">
									<input type="hidden" name="de" value="<?php echo $_SESSION['usuario']['Id']; ?>">
								</div>
							</div>


							<div class="col-xs-12 col-sm-2">
									<button type="submit" id="boton" class="btn btn-primary" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando...!"> Enviar <i class="fa fa-send"></i>   </button>

							</div>

</div>
</form>

									</div>

</div> 
						<div class="row">
							
					

							<div class="col-xs-12">
								<div class="box box-without-padding">
									<div class="clearfix boxHeader">
										<h2 class="boxTitle pull-left">Ultimos Seguimientos</h2>
										<div class="btn-group pull-right boxHeaderOptions">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="zmdi zmdi-more-vert"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Time span</a></li>
												<li><a href="#" title="#"><i class="zmdi zmdi-chart zmdi-hc-fw"></i> Chart type</a></li>
												<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
											</ul>
										</div>	
									</div>

									<?php require_once 'recientes_seguimientos.php'; ?>
								
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<!-- Sharpen stats -->
					<div class="col-xs-12 col-sm-6 col-lg-3">
						<div class="box box-without-padding">
							<div class="bgTitle">
								<h3 class="boxTitle">Sharpen</h3>
							</div>
							<div class="simpleList simpleListLighten">
								<ul>
									<li>
										<a href="#" title="#" class="clearfix">
											<span class="pull-left"><i class="zmdi zmdi-accounts-add zmdi-hc-fw icon"></i> Followers</span>
											<span class="pull-right info">109,073</span>
										</a>
									</li>
									<li>
										<a href="#" title="#" class="clearfix">
											<span class="pull-left"><i class="zmdi zmdi-accounts-list-alt zmdi-hc-fw icon"></i> Subscribers</span>
											<span class="pull-right info">26,114</span>
										</a>
									</li>
									<li>
										<a href="#" title="#" class="clearfix">
											<span class="pull-left"><i class="zmdi zmdi-assignment-o zmdi-hc-fw icon"></i> Products sold</span>
											<span class="pull-right info">1,557,669</span>
										</a>
									</li>
									<li>
										<a href="#" title="#" class="clearfix">
											<span class="pull-left"><i class="zmdi zmdi-bookmark zmdi-hc-fw icon"></i> Awards</span>
											<span class="pull-right info">14</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Charts -->
					<div class="col-xs-12 col-sm-6 col-lg-3 pull-right">

						<!-- Sales -->
						<div class="box box-without-padding">
							<div id="line-chart-1-wrap" class="line-chart-wrap">
								<div class="clearfix boxHeader">
									<h2 class="boxTitle pull-left">Sales</h2>
									<div class="btn-group pull-right boxHeaderOptions">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="zmdi zmdi-more-vert"></i>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Time span</a></li>
											<li><a href="#" title="#"><i class="zmdi zmdi-chart zmdi-hc-fw"></i> Chart type</a></li>
											<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
										</ul>
									</div>
								</div>

								<div class="clearfix stats">
									<div class="count pull-left">2,547</div>
									<div class="info pull-left">Last month<br /><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i> 4%</div>
								</div>

								<div id="line-chart-1" class="line-chart"></div>
							</div>
						</div>
						
						<!-- Subscribers -->
						<div class="box box-without-padding">
							<div id="line-chart-2-wrap" class="line-chart-wrap">
								<div class="clearfix boxHeader">
									<h2 class="boxTitle pull-left">Subscribers</h2>
									<div class="btn-group pull-right boxHeaderOptions">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="zmdi zmdi-more-vert"></i>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Time span</a></li>
											<li><a href="#" title="#"><i class="zmdi zmdi-chart zmdi-hc-fw"></i> Chart type</a></li>
											<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
										</ul>
									</div>
								</div>

								<div class="clearfix stats">
									<div class="count pull-left">32,547</div>
									<div class="info pull-left">Last month<br /><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i> 4%</div>
								</div>

								<div id="line-chart-2" class="line-chart"></div>
							</div>
						</div>
					</div>



					<!-- Reciente opciones -->
			<?php require_once 'recientes_opciones_inicio.php'; ?>
				</div>

				<div class="box box-without-padding">

<!-- <div id="mychat"><a href="http://www.phpfreechat.net">Creating chat rooms everywhere - phpFreeChat</a></div> -->

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
	<script src="assets/js/jquery.fullscreen.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/fullcalendar.min.js"></script>
		<script src="assets/js/lang-all.js"></script>
   <script src="assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
	<div class="visible-xs visible-sm extendedChecker"></div>
	 
</body>

<script type="text/javascript">

/*==========================================================
	=            Envio de un chat por el formulario            =
	==========================================================*/
	
	$(document).ready(function() {
		
	 

$('#formChat').on('submit',  function(event) {
    event.preventDefault();
$('#boton').button('loading');
//alert('aaa');

$.ajax({
    url: 'envios/chat.php',
    type: 'POST',
 
    data: $('#formChat').serialize(),
})
.done(function(data) {
    console.log("success");
    console.log(data);
    if (data==1) {

swal({ 
  title: "Enviado!",
   text: "Su mensaje se ha enviado con exito!",
    type: "success" 
  },
  function(){
 $('#formChat')[0].reset();
 verificaChatTexArea() ;
 verificaChatNotificaciones();
  verificaChat() ;
//location.reload();
});

}
 
})
.fail(function() {
    console.log("error");
})
.always(function() {
    console.log("complete");
$('#boton').button('reset');

});



});



	});
	
	/*=====  End of Envio de un chat por el formulario  ======*/
	

	

	/*=======================================
	=            TexArea Mensaje            =
	=======================================*/
	
	
var usuarioOnline = <?php echo $_SESSION['usuario']['Id']; ?>;

 
   verificaChatTexArea() ;
   setInterval(function(){verificaChatTexArea();},10000);

  
function verificaChatTexArea() {

	$.ajax({
		url: 'async/chatTexarea.php',
		type: 'POST',
	
		data: {usuario: usuarioOnline},
	})
	.done(function(data) {
		console.log("success chatTexArea comprobado");
		//console.log(data);
 
$('#textareaMensaje').text(data);




	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
	//	console.log("complete");
	});
	
	// body...
}



	
	/*=====  End of TexArea Mensaje  ======*/


/*==================================================
=            Verifica en notificaciones            =
==================================================*/

var usuarioOnline = <?php echo $_SESSION['usuario']['Id']; ?>;

 verificaChatNotificaciones();
 //setInterval(function(){verificaChatNotificaciones();},9000);

  
function verificaChatNotificaciones() {

	$.ajax({
		url: 'async/chatNotification.php',
		type: 'POST',
	    dataType: 'json',
		data: {usuario: usuarioOnline},
	})
	.done(function(data) {
		console.log("success Notification comprobado");
		//console.log(data);
 
 if (data!='') {
$.each(data['mensaje'], function(i, item) {
   /* console.log(data['persona'][i]);
    console.log(data['mensaje'][i]);*/

prueba_notificacion(data['persona'][i], data['mensaje'][i])

});

 }
 

 

 	})


	.fail(function() {
		console.log("error");
	})
	.always(function() {
	//	console.log("complete");
	});
	
	// body...
}




/*=====  End of Verifica en notificaciones  ======*/


	/*=====================================
	=            Las vi todas             =
	=====================================*/
	function lasViTodas() {
var usuarioOnline = <?php echo $_SESSION['usuario']['Id']; ?>;

$.ajax({
	url: 'envios/chat_lasViTodas.php',
	type: 'POST',
	
	data: {usuario: usuarioOnline},
})
.done(function(data) {
	console.log("success Las vi todas");
    console.log(data);
})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});

		
	}
	
	
	/*=====  End of Las vi todas   ======*/
	

	/*================================================
	=            Notificaciones en chrome            =
	================================================*/
	//prueba_notificacion();
	function prueba_notificacion(titulo, body) {
if (Notification) {
if (Notification.permission !== "granted") {
Notification.requestPermission()
}
var title = titulo
var extra = {
icon: "img/logo-light.png",
body: body,
sound: 'audio/alert.mp3'
}
var noti = new Notification( title, extra)
noti.onclick = function(event) {
  event.preventDefault(); // prevent the browser from focusing the Notification's tab
  window.focus(); 
  lasViTodas();

}
noti.onclose = function(event) {
  event.preventDefault(); // prevent the browser from focusing the Notification's tab
  window.focus(); 
  lasViTodas();

}
setTimeout( function() { noti.close() }, 10000)
}
}
	
	/*=====  End of Notificaciones en chrome  ======*/
	
	
/*==================================================================
=            Detecto cuando la ventana esta activa o no            =
==================================================================*/



	


window.addEventListener('focus', function() {
    //document.title = 'focused';
   // prueba_notificacion('hola', 'como estas');
});

window.addEventListener('blur', function() {
    //document.title = 'not focused';
verificaChatNotificaciones();
});
/*=====  End of Detecto cuando la ventana esta activa o no  ======*/



/*==================================
=            CALENDARIO            =
==================================*/

$(document).ready(function() {
	$('#calendario').fullCalendar({
	header:{left:"prev,next today",center:"title",right:"month,agendaWeek,agendaDay"},
	  events: 'mod_calendario/async/calendario.php',
	  lang: 'es',
	  defaultView: 'agendaDay'
	 
	   });
	    });

/*=====  End of CALENDARIO  ======*/

</script>
<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:05:52 GMT -->
</html>