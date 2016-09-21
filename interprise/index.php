<?php session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');

}
require_once __DIR__ . '../../db_connect.php';



$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  

$resul =  mysql_query("SELECT distinct status, count(status) as cuenta FROM contactos_web where anulado <> 1 group by status;");

 $st = 0;
$status = array();
 
while($row =  mysql_fetch_array($resul) ) {
$status[$row['status']] = $row['cuenta'];
 }


 
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
   

   <link rel="stylesheet" type="text/css" href="chat/client/themes/default/jquery.phpfreechat.min.css" />
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
							<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Today</a></li>
							<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Yesterday</a></li>
							<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Last week</a></li>
							<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Last month</a></li>
						</ul>
					</div>
				</div>
				

				<!-- Statsbar -->
				<div class="statsBar">
					<div class="row">
						<div class="col-xs-12 col-md-3 i yellow">
							<a href="#" title="#" class="c">
								<h3 class="title">Formularios</h3>
			<div class="num" id="repFormularios"><?php  echo (isset($status['FORMULARIO'])) ? $status['FORMULARIO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-border-color"></i>
								 
							</a>
						</div>
						<div class="col-xs-12 col-md-3 i pink">
							<a href="#" title="#" class="c">
								<h3 class="title">Pros. Citados</h3>
								<div class="num" id="repProsCitados"><?php  echo (isset($status['PROSPECTO CITADO'])) ? $status['PROSPECTO CITADO']  :  '0';  ?></div>
								<i class="icon zmdi-check"></i>
							</a>
						</div>
						<div class="col-xs-12 col-md-3 i green">
							<a href="#" title="#" class="c">
								<h3 class="title">Pros. Pagados</h3>
								<div class="num" id="repProsPagados"><?php  echo (isset($status['PROSPECTO PAGADO'])) ? $status['PROSPECTO PAGADO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-check-all"></i>
							</a>
						</div>

		            <div class="col-xs-12 col-md-3 i interesados">
							<a href="#" title="#" class="c">
								<h3 class="title">Interesados</h3>
								<div class="num" id="repProsPagados"><?php  echo (isset($status['INTERESADO'])) ? $status['INTERESADO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-alert-polygon"></i>
							</a>
						</div>



					</div>
				</div>
	     
	     <div class="statsBar2">
					<div class="row">
						<div class="col-xs-12 col-md-4 i yellow">
							<a href="#" title="#" class="c">
								<h3 class="title">Clientes</h3>
								<div class="num" id="clientes"><?php  echo (isset($status['CLIENTE'])) ? $status['CLIENTE']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-account-box"></i>
							</a>
						</div>
						<div class="col-xs-12 col-md-4 i pink">
							<a href="#" title="#" class="c">
								<h3 class="title">Estudios</h3>
								<div class="num" id="estudios"><?php  echo (isset($status['ESTUDIO'])) ? $status['ESTUDIO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-folder-outline"></i>
							</a>
						</div>
						<div class="col-xs-12 col-md-4 i green">
							<a href="#" title="#" class="c">
								<h3 class="title" id="descartados">Descartados</h3>
								<div class="num"><?php  echo (isset($status['DESCARTADO'])) ? $status['DESCARTADO']  :  '0';  ?></div>
								<i class="icon zmdi zmdi-block-alt"></i>
							</a>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="box box-without-padding">

							<div class="clearfix boxHeader">
								<h2 class="boxTitle pull-left"></h2>
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

							<!-- Tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#tab-item-1" aria-controls="tab-item-1" role="tab" data-toggle="tab">Countries</a></li>
								<li role="presentation"><a href="#tab-item-2" aria-controls="tab-item-2" role="tab" data-toggle="tab">Used devices</a></li>
							</ul>

							<div class="tab-content">

								<!-- Countries -->
								<div role="tabpanel" class="tab-pane fade in active" id="tab-item-1">
									<!-- <div id="donut-chart"></div> -->


									<div style="padding:20px">
										<div>
											<canvas id="lineChart" height="195"></canvas>
										</div>
									</div>

									<div class="row statsInfo clearfix">
										<div class="col-xs-6 i">
											<div class="count">256,521</div>
											<div class="text">monthly total</div>
										</div>
										<div class="col-xs-6 i">
											<div class="count">10,907</div>
											<div class="text">today total</div>
										</div>
									</div>
								</div>

								<!-- Used devices -->
								<div role="tabpanel" class="tab-pane fade" id="tab-item-2">
									<div class="side-padding-25">
										<p>Mauris vitae felis vel velit rutrum accumsan. Sed quis vehicula purus. In non sem bibendum, gravida nisl in, lacinia elit. Sed vel tortor ligula. Mauris consectetur massa ac tellus vestibulum tempus non et augue. Vivamus condimentum in justo eu ornare. Curabitur arcu tellus, venenatis pulvinar ultricies vitae, vulputate id enim. Fusce eros ex, venenatis sit amet magna at, tempor interdum sem. Sed at erat eget lacus condimentum ultrices a in est. Morbi vitae dolor ut ex dignissim molestie eget facilisis ligula. Phasellus ornare interdum leo, ut facilisis sem pretium ut. Vivamus semper feugiat fermentum. Nam eu maximus mi.</p>
										<p>Proin laoreet accumsan odio interdum mattis. In et ante elementum, pharetra neque nec, maximus metus. In eu tristique risus. Vivamus tempor id sapien id lacinia. Ut tincidunt quam sed tortor lacinia, quis vulputate odio faucibus. Donec cursus vel diam a molestie. Praesent sit amet viverra diam. Phasellus eleifend blandit varius. Integer scelerisque massa vitae felis consequat blandit.</p>
									</div>

									<div class="row statsInfo clearfix">
										<div class="col-xs-6 i">
											<div class="count">256,521</div>
											<div class="text">monthly total</div>
										</div>
										<div class="col-xs-6 i">
											<div class="count">10,907</div>
											<div class="text">today total</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-md-6">
						<div class="row">
							<div class="col-xs-6 ct-pie-chart">
								<div class="box box-without-padding">
									<div id="ct-chart-1" class="ct-perfect-fourth"></div>
									<div class="text">Free storage</div>
									<div class="info"><span>77</span>%</div>
								</div>
							</div>
							<div class="col-xs-6 ct-pie-chart">
								<div class="box box-without-padding">
									<div id="ct-chart-2" class="ct-perfect-fourth"></div>
									<div class="text">Bandwidth</div>
									<div class="info"><span>1,5</span>Gb/s</div>
								</div>
							</div>

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

<div id="mychat"><a href="http://www.phpfreechat.net">Creating chat rooms everywhere - phpFreeChat</a></div>

			  </div>
			</div>
		</div>
	</div>

	<!-- Search modal -->
<?php require_once 'buscar.php'; ?>

	<!-- JS -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
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

	<div class="visible-xs visible-sm extendedChecker"></div>
	 <script src="chat/client/jquery.phpfreechat.min.js" type="text/javascript"></script>
</body>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#mychat').phpfreechat({ serverUrl: '/chat/server' });
		});

	</script>
<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:05:52 GMT -->
</html>