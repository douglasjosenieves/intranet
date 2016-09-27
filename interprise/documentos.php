<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}

require_once '../db_connect.php';
// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  




?>
<!doctype html>
<html class="no-js" ng-app lang="es">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Documentos</title>
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

  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
  <script>
 


  </script>

	<link rel="stylesheet" href="assets/sweetalert/sweetalert-master/dist/sweetalert.css">
	 
	<!-- Modernizr -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular-animate.js"></script> 

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
					<a href="#" title="#">Documentos</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Sharpen</a></li>
					<li class="active">Procesos</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline">Documentos</h2>
					<h3 class="boxHeadlineSub">Generar documentos</h3>
					
										<div class="row">
	
		


 <div class="col-xs-12 col-sm-2">
								<div class="form-group">
									<label for="referencia">Nº Referencia</label>
									<input type="text" readonly required class="form-control" name="referencia" id="referencia" placeholder="Nº Referencia">
								</div>
							</div>

								 
														 
															
						 	<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="editado_por" id="editado_por" placeholder="Elaborado Por:">


<?php require_once 'asesor_funtion.php'; ?>

						 	
						 	<div class="col-xs-12 col-sm-4">
						 	<div class="form-group">
						 	<label for="basicInput">Elaborado:</label>
						 	<input type="text" disabled value="<?php echo nombreAsessor($_SESSION['usuario']['Id'])?>" required class="form-control" name="elaborado" id="elaborado" placeholder="Elaborado:">
						 	</div>
						 	</div>
										

						 

 

</div>


<div class="row" ng-app="myApp">
	


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">titulo:</label>
<input type="text" ng-model="name" value="" required class="form-control"  name="titulo" id="titulo" placeholder="titulo:">
</div>
</div>


<button type="button" onclick="update();" class="btn btn-primary">Generar</button>

</div>
			
				 <!--====================================================
					 =            AQUI VA EL CONTENIDO DEL SITE-            =
					 =====================================================-->
					 
					 
				  <iframe id='pdfV' style="width:100%; height: 500px" > </iframe> 
					 <!--====  End of AQUI VA EL CONTENIDO DEL SITE-  ====-->
  
				
				</div>
				</div>
				
			
			</div>
		</div>
	<!-- </div> -->
	
	
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
<script src='http://cdn.tinymce.com/4/tinymce.min.js'></script>
 

<script src="assets/pdfmake/pdfmake.min.js"></script>
<script src="assets/pdfmake/vfs_fonts.js"></script>


 <script type="text/javascript">




	





function update() {
  
 s= $('#titulo').val();
alert(s);

 
var docDefinition = {
	content: [
		{
			image: 'data:image/png;base64,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',
		},
		{ 
			text: s, 
			style: 'header' 
		},
		'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Confectum ponit legam, perferendis nomine miserum, animi. Moveat nesciunt triari naturam.\n\n',
		{
			text: 'Subheader 1 - using subheader style',
			style: 'subheader'
		},
		'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Confectum ponit legam, perferendis nomine miserum, animi. Moveat nesciunt triari naturam posset, eveniunt specie deorsus efficiat sermone instituendarum fuisse veniat, eademque mutat debeo. Delectet plerique protervi diogenem dixerit logikh levius probabo adipiscuntur afficitur, factis magistra inprobitatem aliquo andriam obiecta, religionis, imitarentur studiis quam, clamat intereant vulgo admonitionem operis iudex stabilitas vacillare scriptum nixam, reperiri inveniri maestitiam istius eaque dissentias idcirco gravis, refert suscipiet recte sapiens oportet ipsam terentianus, perpauca sedatio aliena video.',
		'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Confectum ponit legam, perferendis nomine miserum, animi. Moveat nesciunt triari naturam posset, eveniunt specie deorsus efficiat sermone instituendarum fuisse veniat, eademque mutat debeo. Delectet plerique protervi diogenem dixerit logikh levius probabo adipiscuntur afficitur, factis magistra inprobitatem aliquo andriam obiecta, religionis, imitarentur studiis quam, clamat intereant vulgo admonitionem operis iudex stabilitas vacillare scriptum nixam, reperiri inveniri maestitiam istius eaque dissentias idcirco gravis, refert suscipiet recte sapiens oportet ipsam terentianus, perpauca sedatio aliena video.',
		'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Confectum ponit legam, perferendis nomine miserum, animi. Moveat nesciunt triari naturam posset, eveniunt specie deorsus efficiat sermone instituendarum fuisse veniat, eademque mutat debeo. Delectet plerique protervi diogenem dixerit logikh levius probabo adipiscuntur afficitur, factis magistra inprobitatem aliquo andriam obiecta, religionis, imitarentur studiis quam, clamat intereant vulgo admonitionem operis iudex stabilitas vacillare scriptum nixam, reperiri inveniri maestitiam istius eaque dissentias idcirco gravis, refert suscipiet recte sapiens oportet ipsam terentianus, perpauca sedatio aliena video.\n\n',
		{
			text: 'Subheader 2 - using subheader style',
			style: 'subheader'
		},
		'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Confectum ponit legam, perferendis nomine miserum, animi. Moveat nesciunt triari naturam posset, eveniunt specie deorsus efficiat sermone instituendarum fuisse veniat, eademque mutat debeo. Delectet plerique protervi diogenem dixerit logikh levius probabo adipiscuntur afficitur, factis magistra inprobitatem aliquo andriam obiecta, religionis, imitarentur studiis quam, clamat intereant vulgo admonitionem operis iudex stabilitas vacillare scriptum nixam, reperiri inveniri maestitiam istius eaque dissentias idcirco gravis, refert suscipiet recte sapiens oportet ipsam terentianus, perpauca sedatio aliena video.',
		'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Confectum ponit legam, perferendis nomine miserum, animi. Moveat nesciunt triari naturam posset, eveniunt specie deorsus efficiat sermone instituendarum fuisse veniat, eademque mutat debeo. Delectet plerique protervi diogenem dixerit logikh levius probabo adipiscuntur afficitur, factis magistra inprobitatem aliquo andriam obiecta, religionis, imitarentur studiis quam, clamat intereant vulgo admonitionem operis iudex stabilitas vacillare scriptum nixam, reperiri inveniri maestitiam istius eaque dissentias idcirco gravis, refert suscipiet recte sapiens oportet ipsam terentianus, perpauca sedatio aliena video.\n\n',
		{ 
			text: 'It is possible to apply multiple styles, by passing an array. This paragraph uses two styles: quote and small. When multiple styles are provided, they are evaluated in the specified order which is important in case they define the same properties', 
			style: ['quote', 'small'] 
		}
	],
	styles: {
		header: {
			fontSize: 18,
			bold: true
		},
		subheader: {
			fontSize: 15,
			bold: true
		},
		quote: {
			italics: true
		},
		small: {
			fontSize: 8
		}
	}
}


pdfMake.createPdf(docDefinition).getDataUrl(function (outDoc) {
document.getElementById('pdfV').src = outDoc;
});

//$('#pdfV').replaceWith($('#pdfV').clone());
//document.getElementById('pdfV').src = document.getElementById('pdfV').src
//document.location.reload([true]);

	//alert('update');
	// body...
}

  // open the PDF in a new window
 //pdfMake.createPdf(docDefinition).open();

 // print the PDF (temporarily Chrome-only)
 //pdfMake.createPdf(docDefinition).print();

 // download the PDF (temporarily Chrome-only)
 //pdfMake.createPdf(docDefinition).download('optionalName.pdf');

  





 
 </script>
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>