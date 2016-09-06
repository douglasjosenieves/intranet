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
	<title>Formulario de Contacto</title>
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
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="assets/css/app.min.css">
	
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
			<h2 class="boxTitle">Pending tasks <span class="badge">8</span></h2>

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
				<h1 class="pageTitle">
					<a href="#" title="#">Ficha de contacto</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Sharpen</a></li>
					<li class="active">Formularios</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline">Input Fields</h2>
					<h3 class="boxHeadlineSub">Subtitle of the input fields goes here</h3>
					
					<form>
						<div class="row">
							 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="nombre">Nombres</label>
									<input type="text" required class="form-control" name="nombre" id="nombre" placeholder="Nombres">
								</div>
							</div>



							
 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="apellidos">Apellidos</label>
									<input type="text" required class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos">
								</div>
							</div>


 <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="doucumento">Documento</label>
									<input type="text" required class="form-control" name="doucumento" id="doucumento" placeholder="Documento">
								</div>
							</div>
						</div>

						<!-- Custom select -->
						<div class="row customSelectWrap">
							<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Country</label>
									<select class="js-select">
										<option disabled selected>- Select country -</option>
										<option>Slovakia</option>
										<option>Czech Republic</option>
										<option>Russia</option>
										<option>United Kingdom</option>
										<option>Spain</option>
										<option>France</option>
										<option>Austria</option>
										<option>Germany</option>
										<option>Italy</option>
										<option>USA</option>
										<option>Norway</option>
										<option>Denmark</option>
										<option>Iceland</option>
										<option>Croatia</option>
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Country</label>
									<select class="js-select">
										<option disabled selected>- Select country -</option>
										<option>Slovakia</option>
										<option>Czech Republic</option>
										<option>Russia</option>
										<option>United Kingdom</option>
										<option>Spain</option>
										<option>France</option>
										<option>Austria</option>
										<option>Germany</option>
										<option>Italy</option>
										<option>USA</option>
										<option>Norway</option>
										<option>Denmark</option>
										<option>Iceland</option>
										<option>Croatia</option>
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Country</label>
									<select class="error js-select">
										<option disabled selected>- Select country -</option>
										<option>Slovakia</option>
										<option>Czech Republic</option>
										<option>Russia</option>
										<option>United Kingdom</option>
										<option>Spain</option>
										<option>France</option>
										<option>Austria</option>
										<option>Germany</option>
										<option>Italy</option>
										<option>USA</option>
										<option>Norway</option>
										<option>Denmark</option>
										<option>Iceland</option>
										<option>Croatia</option>
									</select>
									<div class="input-error-msg">Choose option</div>
								</div>
							</div>
						</div>

						<!-- Textarea -->
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="textarea1">Message</label>
									<textarea id="textarea1" class="form-control" rows="8">Lorem ipsum dolor sit amet, cu pro omittam adipisci, stet platonem theophrastus qui in. No fugit nobis accusamus nec. Semper explicari ei mei, cu simul omnes definiebas vis. Ne duo debitis similique expetendis, ne vis aliquando complectitur. Eu malorum persius liberavisse has, discere petentium assueverit sea at. Ad illum dictas persequeris sit.</textarea>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="textarea2">Message</label>
									<textarea id="textarea2" class="form-control error" rows="8"></textarea>
								</div>
							</div>
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
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
	<script src="assets/js/app.min.js"></script>

	<div class="visible-xs visible-sm extendedChecker"></div>
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>