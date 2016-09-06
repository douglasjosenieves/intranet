<?php session_start();
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'] ;
require_once '../db_connect.php';
require_once '../PHPPaging.lib.php';

// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 


?>

				
				<!--============================================================
				=            AQUI VA LA CONSULTA A LA BASE DE DATOS            =
				=============================================================-->
			

				<?php 
				$id = $_REQUEST['id'];
				$i=0;
				$resul =  mysql_query("SELECT * FROM `form_fichas_opciones_franquicias` where anulado <> 1 and ref='$id'");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				//echo $row['nombre'];
				$opciones['opciones'][]=$row;
				
				 $imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
				
																	
				
				
			 
					<?php $i++;  }?>
				<!--====  End of AQUI VA LA CONSULTA A LA BASE DE DATOS  ====-->
				
				
								

 
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Fichas de opciones (Franquicias) PDF</title>
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
  
         <link rel="stylesheet" href="assets/css/print.css" media="print">
         <style type="text/css">
         
@media print and (-webkit-min-device-pixel-ratio:0){

@page{
   margin: 0;
}
#cuadro_inversiones {
 background-color: #303F9F !important;
 color: #ccc !important;
    -webkit-print-color-adjust: exact; 

}
#cuadro_tamano_local {
 background-color: #E64A19 !important;
 color: #ccc !important;
    -webkit-print-color-adjust: exact; 

}
#cuadro_alquiler {
 background-color: #388E3C !important;
 color: #ccc !important;
    -webkit-print-color-adjust: exact; 

}
#cuadro_antiguedad {
 background-color: #455A64 !important;
 color: #ccc !important;
    -webkit-print-color-adjust: exact; 

}
.colorea_blanco_print {
  color: white !important;
    /* actually trick with white text-shadow not work ( */
  
-webkit-print-color-adjust: exact; 
}

#pdf-header{
	background-image: url('../images/3.jpg') !important ;
  background-repeat: no-repeat;
  background-size: cover;
color: #fff;
-webkit-print-color-adjust: exact; 
font-size: 9px;

}
 
    
    #pdf-septor blockquote div{
	font-size: 15px !important ;

	  color: #fff;
	 text-shadow: 1px 2px #999;
	-webkit-print-color-adjust: exact; 
	
}


.rte h1, .rte h2, .rte h3, .rte h4, .rte h5, .rte h6 {
    font-weight: 700;
    margin: 10px 0 5px 0;
    	-webkit-print-color-adjust: exact; 
}


.rte blockquote {
    border-left: 5px solid #fe5621;
    padding: 5px;
}

.statsBar .i .c {
    display: block;
    color: #fff;
    padding: 8px 15px 8px 15px;
    position: relative;
    	-webkit-print-color-adjust: exact; 
}

@media (max-width: 991px){
.statsBar .i {
    margin-top: 0px;
}
}
 .zmdi:before {

  color:red; 
  -webkit-print-color-adjust: exact; 

 }
 #tex1{
 	margin-left: 15px;
 }
  #tex2{
 	margin-left: 15px;
 }

 .fa .fa-gg:before  {
		color: red;
	-webkit-print-color-adjust: exact; 
	}

      }

 


         </style>
	<link rel="stylesheet" href="assets/sweetalert/sweetalert-master/dist/sweetalert.css">
	 
	<!-- Modernizr -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script>

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<style type="text/css">

 

#pdf-header{
	background-image: url('../images/3.jpg') ;
  background-repeat: no-repeat;
  background-size: cover;
color: #fff;

}
						
#pdf-logo{
	width: 70%;
	margin-top: 20px;
}



#pdf-septor blockquote div{
	font-size: 20px;

	color: #fff;
	 text-shadow: 1px 2px #999;
	
	
}
.statsBar .i.teal .c{background:#009587}

.statsBar .i .c .icon, .statsBar .i .c:before {
    width: 50px;
}
.statsBar  div {

	margin-bottom: 0px;





					</style>
	<script language="Javascript">
	function imprSelec(nombre) {
	  var ficha = document.getElementById(nombre);
	  var ventimp = window.open(' ', 'popimpr');
	  ventimp.document.write( ficha.innerHTML );
	  ventimp.document.close();
	  ventimp.print( );
	  ventimp.close();
	}
	</script>
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
				 
					<a href="#" title="#" class="hidden-print">Fichas de opciones (Franquicias) PDF</a>
				</h1>
				<ol class="breadcrumb hidden-print">
					<li><a href="index.php">Sharpen</a></li>
				<li><a href="reporte-ficha-opciones-franquicias.php">Reportes - Fichas de opciones (Franquicias)</a></li>
				</ol>
				
				<div id="imprime" class="box rte ">
					<!-- html comment 
					<h2 class="boxHeadline">Titulo</h2>
					<h3 class="boxHeadlineSub">Subtitulo</h3>
					-->
				
				
					<div id="pdf-header" class="row">
	
	<div class="col-xs-6"><img id="pdf-logo"  class="img-responsive" src="../images/logo-blanco.png">   </div>
						
				<div id="pdf-septor" align="right"  class="col-xs-6">

<blockquote class="blockquote-align-right">	

<div class="colorea_blanco_print">Sector <?php echo $opciones['opciones'][0]['sector'] ?>   </div>
<div class="colorea_blanco_print"><?php echo $opciones['opciones'][0]['nombre_opcion'] ?> </div>
<div class="colorea_blanco_print">(Ref. E<?php echo $opciones['opciones'][0]['ref'] ?>)</div>
<div class="colorea_blanco_print"><?php echo $opciones['opciones'][0]['ciudad'] ?> - <?php echo $opciones['opciones'][0]['zona'] ?></div>
</blockquote>
						</div>

					</div>
					<br />
					

					
						 

						<div class="col-xs-3">
	<!-- Statsbar -->
				      <div class="statsBar">
					<div class="row">
						<div  id="cuadro_inversiones" class="col-xs-12 col-xs-12 i yellow">
							<a href="#" title="#" class="c">
								<h3 class="title ">Inversión desde</h3>
								<div class="num "><?php echo $opciones['opciones'][0]['inversion'] ?> €</div>
								 
							<i class="icon zmdi zmdi-case"></i>
							</a>
						</div>
						<div id="cuadro_tamano_local" class="col-xs-12 col-xs-12 i pink">
							<a href="#" title="#" class="c">
								<h3 class="title">Tamaño del local</h3>
								<div class="num"><?php echo $opciones['opciones'][0]['tamano_local'] ?> Mts2</div>
								<i class="icon zmdi  zmdi-local-store"></i>
							</a>
						</div>
						<div id="cuadro_alquiler" class="col-xs-12 col-xs-12 i green">
							<a href="#" title="#" class="c">
								<h3 class="title">Canon de publicidad </h3>
								<div class="num"><?php echo $opciones['opciones'][0]['canon_publicidad'] ?> </div>
								
								<i class="icon zmdi  zmdi-repeat"></i>
							</a>
						</div>

							<div id="cuadro_antiguedad" class="col-xs-12 col-xs-12 i azulejo">
							<a href="#" title="#" class="c">
								<h3 class="title">Royalty</h3>
								<div class="num"><?php echo $opciones['opciones'][0]['royalty'] ?> </div>
								<i class="icon zmdi  zmdi-star"></i>

							</a>
						</div>



							<div  id="cuadro_inversiones" class="col-xs-12 col-xs-12 i yellow">
							<a href="#" title="#" class="c">
								<h3 class="title ">Contrato</h3>
								<div class="num "><?php echo $opciones['opciones'][0]['contrato'] ?> Años </div>
								 
							<i class="icon zmdi zmdi-assignment"></i>
							</a>
						</div>


							<div id="cuadro_tamano_local" class="col-xs-12 col-xs-12 i pink">
							<a href="#" title="#" class="c">
								<h3 class="title">Población mínima</h3>
								<div class="num"><?php echo $opciones['opciones'][0]['poblacion_minima'] ?> </div>
								 <i class="icon zmdi zmdi-male-female"></i>
							</a>
						</div>

					</div>
				</div>
				 
					 


				 
					
						</div>
					
						<div class="col-xs-9">
						<div class="row">
							
<?php 


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
 
							 <center>
							<small>*Las fotos de las opciones son referenciales.</small>
							</center>
                        
<br/>
                        <div class="row" id="comentarios" >
                        	<div class="col-xs-12"><p id="tex1"> &nbsp&nbsp<?php echo $opciones['opciones'][0]['comentarios_sobre_negocio'] ?></p></div>

                        </div>
                        
                        <div class="row" id="prueba">
                        	<div class="col-xs-6" ><h2>&nbsp Nuestra valoración  <i class="fa fa-gg"></i></h2><p id="tex2"><?php echo $opciones['opciones'][0]['datos_adicionales'] ?></p></div>
                        	

                        	<div class="col-xs-6"><h2>Ventaja comparativa <i class="fa fa-gg"></i></h2><p><?php echo $opciones['opciones'][0]['ventajas_comparativas'] ?></p></div>
                        </div>	

                        
                        
                        </div><!--  row-->

						</div> <!--  div 9 -->
					
				
					
  

				
				
				<div align="right">

				<button type="button" onclick="window.print();" class="btn bg-indigo hidden-print">Imprimir  <i class="fa fa-print"></i></button>

				  </div>
				</div> <!-- box rate -->
				
			
			</div><!-- container -->

		</div>  <!-- Page content -->

	</div>	<!-- Page Wrap -->
	<br><br><br><br>
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


	

 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>