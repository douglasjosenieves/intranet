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



$v=0;
	/*<option value="ESPANA">España</option>*/
$teleo ='';
$teleoid =array();
				
 

$resulv =  mysql_query("SELECT * FROM usuarios where anulado <> 1 and cargo = 'teleoperador'");		

 

			
				
				while($rowv =  mysql_fetch_array($resulv) ) { 
$teleo .= '<option value="';
$teleo .= $rowv['id'];
$teleo .= '">';
$teleo .= strtoupper($rowv['nombre'].' '.$rowv['apellido']);
$teleo .= '</option>';
$teleoid[] = $rowv['id'];

            
            //$teleoperador['teleoperador'][]=$row;
					$v++;}
?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>REP. Gestion 2</title>
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
  <script>
 


  </script>

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
<form action="rep-gestion2.php" method="get"> 
		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#">REP. Gestión 2</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Sharpen</a></li>
					<li class="active">Reportes</li>
				</ol>
			
				<div class="box rte">
				
					<h2 class="boxHeadline">Reporte de formularios</h2>
					<h3 class="boxHeadlineSub">Dirección atención al cliente</h3>
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
					
				 <!--====================================================
					 =            AQUI VA EL CONTENIDO DEL SITE-            =
					 =====================================================-->
					 
					 <div class="row">



 




<div class="col-xs-12 col-sm-3">
<div class="form-group">
<label for="basicInput">De</label>
<input type="date" value="<?php echo $ficha['ficha_contacto'][0]['start'] ?>" required class="form-control" name="start" id="start" placeholder="De:">
</div>
</div>




<div class="col-xs-12 col-sm-3">
<div class="form-group">
<label for="basicInput">Hasta</label>
<input type="date" value="<?php echo $ficha['ficha_contacto'][0]['fin'] ?>" required class="form-control" name="fin" id="fin" placeholder="Hasta">
</div>
</div>



<div class="col-xs-12 col-sm-6">
<div class="form-group">
<label for="basicInput">Asesor</label>

<select  name="operador" data-id="<?php echo 	$contacto['contacto'][$i]['id']  ?>"  class="js-select operador">
										<option  value="" >- Seleccionar -</option>
										<?php echo 	$teleo  ?>
									 
								 
									</select>


</div>
</div>

</div>

<div class="ror">
	
	<button type="submit" class="btn btn-primary">Filtrar</button>
</div>

					 
					 <!--====  End of AQUI VA EL CONTENIDO DEL SITE-  ====-->
  
				
				</div>
				


				<!--=========================================================
				=            Aqui comienza el cuerpo del reporte            =
				==========================================================-->
<?php 				
 
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  



if (!isset($_GET['start']) ) {
$resul =  mysql_query("SELECT distinct status, count(status) as cuenta FROM contactos_web where anulado <> 1 group by status;");	
}


else {
$start = $_GET['start'];
$fin = $_GET['fin'];

if ($_GET['operador']!='') {

	$operador= $_GET['operador'];

	$resul =  mysql_query("SELECT distinct status, count(status) as cuenta FROM contactos_web where anulado <> 1 and elaborado_por = $operador and date(fecha) between '$start' and '$fin'  group by status;");	
}

else {

$resul =  mysql_query("SELECT distinct status, count(status) as cuenta FROM contactos_web where anulado <> 1 and date(fecha) between '$start' and '$fin'  group by status;");	
}

}




 $st = 0;
$status = array();
 
while($row =  mysql_fetch_array($resul) ) {
$status[$row['status']] = $row['cuenta'];
 }

 require_once 'asesor_funtion.php';
 ?>

					<div class="box rte">
				
					<h2 class="boxHeadline">Reporte</h2>
<h3 class="boxHeadlineSub"><strong>Filtros:</strong>| <strong>Fecha de:</strong> <?php if (isset($_GET['start'] )) { echo $_GET['start'] ;} ?>   <strong>hasta: </strong><?php if (isset($_GET['fin'] )) { echo $_GET['fin'] ;} ?> | <strong>Asesor:</strong> 


<?php  if ($_GET['operador']!='') {echo nombreAsessor($_GET['operador']);} else {echo 'Todos.';}  ?></h3>



 

<?php 

$totalFormulariosRecibidos = $status['FORMULARIO'] + $status['INTERESADO'] +$status['PROSPECTO CITADO'] + $status['PROSPECTO PAGADO'] + $status['PROSPECTO EN SEGUIMIENTO'] + $status['CLIENTE'] + $status['ESTUDIO'] +$status['NO CONTACTADO']  +$status['FORMULARIO DEFECTUOSO'] +$status['DESCARTADO']  ;
 

$totalInteresados = $status['FORMULARIO'] + $status['INTERESADO'] +$status['PROSPECTO CITADO'] + $status['PROSPECTO PAGADO'] + $status['PROSPECTO EN SEGUIMIENTO'] + $status['CLIENTE'] + $status['ESTUDIO']  ;

$poscitados = $status['PROSPECTO CITADO'] + $status['PROSPECTO PAGADO'] + $status['PROSPECTO EN SEGUIMIENTO'] + $status['CLIENTE'] + $status['ESTUDIO']  ;

$pospagados =   $status['PROSPECTO PAGADO'] + $status['PROSPECTO EN SEGUIMIENTO'] + $status['CLIENTE'] + $status['ESTUDIO']  ;


$Totalseguimiento =   $status['PROSPECTO EN SEGUIMIENTO'] + $status['CLIENTE'] + $status['ESTUDIO']  ;

$Totalcliente =    $status['CLIENTE'] + $status['ESTUDIO']  ;
 ?>


 
   <hr>

<div class="row">



<div class="col-xs-12 col-md-6">
<div class="box userCard userCardWide">
<div class="c">
<a href="#" title="#" class="image">
<img src="img/logo-light.png" alt="#" width="143" height="143">
</a>
<div class="info rte">
<h4 class="name">Formularios</h4>
<div class="position text-light-gray">Formularios recibidos desde la web </div>

<strong style="font-size:40px;"><?php  echo (isset($totalFormulariosRecibidos)) ? $totalFormulariosRecibidos :  '0';  ?></strong><br>
Fuente: GEA Systems<br>

</div>
</div>
</div>
</div>	



<div class="col-xs-12 col-md-6">
<div class="box userCard userCardWide">
<div class="c">
<a href="#" title="#" class="image">
<img src="img/logo-light.png" alt="#" width="143" height="143">
</a>
<div class="info rte">
<h4 class="name">Interesados</h4>
<div class="position text-light-gray">Contactos interesados en que el servicio. </div>

<strong style="font-size:40px;"><?php  echo (isset($totalInteresados)) ? $totalInteresados  :  '0';  ?></strong><br>
Fuente: GEA Systems<br>

</div>
</div>
</div>
</div>	


<div class="col-xs-12 col-md-6">
<div class="box userCard userCardWide">
<div class="c">
<a href="#" title="#" class="image">
<img src="img/logo-light.png" alt="#" width="143" height="143">
</a>
<div class="info rte">
<h4 class="name">Pros. Citados</h4>
<div class="position text-light-gray">Contactos citados mas no han cancelado la cita. </div>

<strong style="font-size:40px;"><?php  echo (isset($poscitados )) ? $poscitados   :  '0';  ?></strong><br>
Fuente: GEA Systems<br>

</div>
</div>
</div>
</div>	



<div class="col-xs-12 col-md-6">
<div class="box userCard userCardWide">
<div class="c">
<a href="#" title="#" class="image">
<img src="img/logo-light.png" alt="#" width="143" height="143">
</a>
<div class="info rte">
<h4 class="name">Pros. Pagados</h4>
<div class="position text-light-gray">Contactos citados que ya cancelaron su cita. </div>

<strong style="font-size:40px;"><?php  echo (isset($pospagados )) ? $pospagados  :  '0';  ?></strong><br>
Fuente: GEA Systems<br>

</div>
</div>
</div>
</div>	



<div class="col-xs-12 col-md-6">
<div class="box userCard userCardWide">
<div class="c">
<a href="#" title="#" class="image">
<img src="img/logo-light.png" alt="#" width="143" height="143">
</a>
<div class="info rte">
<h4 class="name">Pros. Seguimiento</h4>
<div class="position text-light-gray">Contactos que ya asistieron a una cita y se esta en proceso de tramites de contrato. </div>

<strong style="font-size:40px;"><?php  echo (isset($Totalseguimiento)) ? $Totalseguimiento  :  '0';  ?></strong><br>
Fuente: GEA Systems<br>

</div>
</div>
</div>
</div>	



<div class="col-xs-12 col-md-6">
<div class="box userCard userCardWide">
<div class="c">
<a href="#" title="#" class="image">
<img src="img/logo-light.png" alt="#" width="143" height="143">
</a>
<div class="info rte">
<h4 class="name">Clientes</h4>
<div class="position text-light-gray">Contactos que ya cliente de la empresa. </div>

<strong style="font-size:40px;"><?php  echo (isset($Totalcliente)) ? $Totalcliente :  '0';  ?></strong><br>
Fuente: GEA Systems<br>

</div>
</div>
</div>
</div>	


<div class="col-xs-12 col-md-6">
<div class="box userCard userCardWide">
<div class="c">
<a href="#" title="#" class="image">
<img src="img/logo-light.png" alt="#" width="143" height="143">
</a>
<div class="info rte">
<h4 class="name">Estudios</h4>
<div class="position text-light-gray">Contactos que contrataron estudios. </div>

<strong style="font-size:40px;"><?php  echo (isset($status['ESTUDIO'])) ? $status['ESTUDIO']  :  '0';  ?></strong><br>
Fuente: GEA Systems<br>

</div>
</div>
</div>
</div>	




<div class="col-xs-12 col-md-6">
<div class="box userCard userCardWide">
<div class="c">
<a href="#" title="#" class="image">
<img src="img/logo-light.png" alt="#" width="143" height="143">
</a>
<div class="info rte">
<h4 class="name">No contactado</h4>
<div class="position text-light-gray">Contactos que no se logro hacer contacto con los datos recibidos. </div>

<strong style="font-size:40px;"><?php  echo (isset($status['NO CONTACTADO'])) ? $status['NO CONTACTADO']  :  '0';  ?></strong><br>
Fuente: GEA Systems<br>

</div>
</div>
</div>
</div>	


<div class="col-xs-12 col-md-6">
<div class="box userCard userCardWide">
<div class="c">
<a href="#" title="#" class="image">
<img src="img/logo-light.png" alt="#" width="143" height="143">
</a>
<div class="info rte">
<h4 class="name">Form. Defectuoso</h4>
<div class="position text-light-gray">Contactos con defecto en el formulario. </div>

<strong style="font-size:40px;"><?php  echo (isset($status['FORMULARIO DEFECTUOSO'])) ? $status['FORMULARIO DEFECTUOSO']  :  '0';  ?></strong><br>
Fuente: GEA Systems<br>

</div>
</div>
</div>
</div>	



<div class="col-xs-12 col-md-6">
<div class="box userCard userCardWide">
<div class="c">
<a href="#" title="#" class="image">
<img src="img/logo-light.png" alt="#" width="143" height="143">
</a>
<div class="info rte">
<h4 class="name">Descartados</h4>
<div class="position text-light-gray">Contactos que no se logro hacer contacto con los datos recibidos. </div>

<strong style="font-size:40px;"><?php  echo (isset($status['DESCARTADO'])) ? $status['DESCARTADO']  :  '0';  ?></strong><br>
Fuente: GEA Systems<br>

</div>
</div>
</div>
</div>	




  </div>





					</div>
				
				<!--====  End of Aqui comienza el cuerpo del reporte  ====-->
				

				</div>
				
			
			</div>
			</form>
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
 

	<div class="visible-xs visible-sm extendedChecker"></div>


	
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>