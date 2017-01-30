<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../../index.php');
}

require_once '../../db_connect.php';
require_once 'envios/config.php';
// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  

$id=$_GET['id'];
 
if (isset($id)) {
	# code...

 $resul =  mysql_query("SELECT * FROM  ".ASYNC." where ref =$id");
$data = array();
while($row =  mysql_fetch_array($resul) ) {
$data['data'][] = $row;
}

 
$anulado = unserialize($data['data'][0]['anulado']);


$id_asig = array();
 $asig =  mysql_query("SELECT c.id, c.nombres, f.nombre_opcion FROM asing_fichas_exclusivas fd, form_fichas_opciones f, contactos_web c where fd.id_opcion = f.ref and c.id = fd.id_cliente  and fd.id_opcion =$id and fd.categoria = 'DIARIAS'" );
$asignado = array();
while($row =  mysql_fetch_array($asig) ) {
$id_asig[] = $row['id'];

}
 
}

 ;



?>


<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo TITULO ?></title>
	<meta name="description" content="...">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Icons -->
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	
	<!-- CSS -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
		
	<link rel="stylesheet" href="../assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
	<link rel="stylesheet" href="../assets/css/select2.min.css">
	<link rel="stylesheet" href="../assets/font-awesome-4.4.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="../assets/css/fontello.css">
	<link rel="stylesheet" href="../assets/css/chartist.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="../assets/css/app.min.css">
	
  <script src="../assets/tinymce/tinymce.min.js"></script>
  <script>
 


  </script>

	<link rel="stylesheet" href="../assets/sweetalert/sweetalert-master/dist/sweetalert.css">
	 
	<!-- Modernizr -->
	<script src="../assets/js/modernizr-2.8.3.min.js"></script>

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


	<!-- Header -->
	<?php  require_once '../header.php'; ?>
	
	<?php  require_once '../tareas-pendientes.php'; ?>
	<!-- Page Wrap -->
	<form id="formulario">
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#"><?php echo TITULO ?></a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="../index.php">Panel de control</a></li>
					<li class="active">Tablas</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline"><?php echo TITULO ?></h2>
					<h3 class="boxHeadlineSub">Datos del contacto </h3>
<div class="row">


<div class="col-xs-12 col-sm-2">
<div class="form-group">
<label for="referencia">Nº Referencia</label>
<input type="text" readonly value="<?php echo $data['data'][0]['ref'] ?>"  required class="form-control" name="referencia" id="referencia" placeholder="Nº Referencia">
</div>
</div>


<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="ins_user" id="ins_user" placeholder="Elaborado Por:">

<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="upd_user" id="upd_user" placeholder="Elaborado Por:">


<?php require_once '../asesor_funtion.php'; ?>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Usuario:</label>
<input type="text" disabled value="<?php echo nombreAsessor($_SESSION['usuario']['Id'])?>" required class="form-control" name="elaborado" id="elaborado" placeholder="Elaborado:">
</div>
</div>

<div class="col-xs-12 col-sm-4 col-sm-offset-2">
<div class="form-group">
<label for="basicInput">Buscar:</label>
<input type="text" autocomplete="off" value="<?php echo $data['data'][0]['buscar'] ?>" class="form-control" name="buscar" id="buscar" placeholder="Buscar:" style="background-color: #accead; font-weight: 800;">
</div>

<div >
	<ul id="resultado_busqueda">
		 
	</ul>
</div>
</div>


</div>
					
				 <!--====================================================
					 =            DATOS DEL CONTACTO-            =
					 =====================================================-->
					 
					 <div class="row">
					 	

								<div class="col-xs-12 col-sm-4">
																<div class="form-group">
																	<label for="basicInput">Nombre Opción:</label>
											<input type="text" value="<?php echo $data['data'][0]['nombre_opcion'] ?>" required class="form-control" name="nombre_opcion" id="nombre_opcion" placeholder="nombre_opcion:">
																</div>
															</div>
								

								
									<div class="col-xs-12 col-sm-4">
																<div class="form-group">
																	<label for="basicInput">Sector:</label>
											<input type="text" value="<?php echo $data['data'][0]['sector'] ?>" required class="form-control" name="sector" id="sector" placeholder="Sector:">
																</div>
															</div>


 <input type="hidden" value="DIARIAS" required class="form-control" name="categoria" id="categoria" placeholder="categoria:">


							</div>



			 

		
				
				
				</div>  <!--  boxrate -->





<?php if ($_GET['tipo']=='editar'): ?>
<div class="box rte">
	

<div class="tableWrap table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th># Id</th>
									<th>Name</th>
									<th>Opcion 1</th>
									<th>Opcion 2</th>
									<th>Opcion 3</th>
									<th class="hidden">Email</th>


 
									<th>Asignar</th>
										<th>Notificar</th>
								</tr>
							</thead>
							<tbody>
								

<?php  
$x= 0;
$resul1 =  mysql_query("SELECT * FROM  contactos_web where status = 'CLIENTE' OR status =  'ESTUDIO' and anulado <> 1");
$contact = array();
while($row =  mysql_fetch_array($resul1) ) {
$contact['contact'][] = $row;

 ?>


								<tr >
									<th scope="row"><?php echo $contact['contact'][$x]['id'] ?></th>
									<td><?php echo $contact['contact'][$x]['nombres'].' '. $contact['contact'][$x]['apellidos']   ?>



<input type="hidden" name="id_cliente[]" value="<?php echo $contact['contact'][$x]['id'] ?>">										
<input type="hidden" name="nombre_cliente[]" value="<?php echo $contact['contact'][$x]['nombres'] ?>">
<input type="hidden" name="apellido_cliente[]" value="<?php echo $contact['contact'][$x]['apellidos'] ?>">

<input type="hidden" name="email_cliente[]" value="<?php echo $contact['contact'][$x]['email']   ?>">


									</td>
								 
									<td class="opcion1"><?php echo $contact['contact'][$x]['opcion1'] ?></td>
									<td class="opcion2"><?php echo $contact['contact'][$x]['opcion2'] ?></td>
									<td class="opcion3"><?php echo $contact['contact'][$x]['opcion3'] ?></td>
									<td class="hidden"><?php echo $contact['contact'][$x]['email'] ?></td>
									<td class="checkboxes checkboxes-sm">
										<label>
											<input class="imput_checkbox" value="<?php echo $contact['contact'][$x]['id'] ?>"  name="asignar[]" data-cliente="<?php echo $contact['contact'][$x]['id'] ?>" value="" type="checkbox">



											<span></span>
										</label>
									</td>


									<td class="checkboxes checkboxes-sm">
										<label>
											<input   name="notificar[]"  value="<?php echo $contact['contact'][$x]['id'] ?>" type="checkbox">



											<span></span>
										</label>
									</td>
								</tr>


								<?php $x++;  }?>
							
							</tbody>
						</table>
					</div>


</div>
<?php endif ?>

<!--==============================
=            COMANDOS            =
===============================-->

			<div class="box rte">
			 
<?php 

 if ($_GET['tipo']=='editar') {
 	$botonNombre= 'Guardar';
 	$url= 'envios/insert.php';
 }

 else{
	$botonNombre= 'Guardar';
	$url= 'envios/insert.php';

 }
 ?>
 

<input type="reset" value="Reset" class="btn bg-gray">


<?php if ($_GET['tipo']=='editar'): ?>
	


<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary"><?php echo $botonNombre; ?> <i class="fa fa-save"></i></button>

 

<?php endif ?>

<input type="button" value="Nuevo" onclick="window.location='index.php';" class="btn bg-blue">
<span class="cargando"><i class='fa fa-circle-o-notch fa-spin'></i>Loading...</span>
					 



					
				</div> <!-- box  -->
<!--====  End of COMANDOS  ====-->

					




				</div>
				
			
			</div>
		</div>
	<!-- </div> -->
	</form>
	
	<!-- Search modal -->
<?php require_once '../buscar.php'; ?>

	<!-- JS -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	 
	<script src="../assets/js/select2.min.js"></script>
	<script src="../assets/js/parsley.min.js"></script>
	<script src="../assets/js/throttle-debounce.min.js"></script>
	<script src="../assets/js/jquery.shuffle.min.js"></script>
	<script src="../assets/js/autosize.min.js"></script>
	<script src="../assets/js/raphael-min.js"></script>
	<script src="../assets/js/morris.min.js"></script>
	<script src="../assets/js/Chart.min.js"></script>
	<script src="../assets/js/chartist.min.js"></script>
	<script src="../assets/js/moment.min.js"></script>
	<script src="../assets/js/bootstrap-datepicker.min.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="../assets/js/jquery.fullscreen.min.js"></script>
	<script src="../assets/js/jquery.mask.min.js"></script>
	<script src="../assets/js/charCount.js"></script>
	<script src="../assets/js/bootstrap-maxlength.js"></script>
	<script src="../assets/js/pwstrength-bootstrap-1.2.9.min.js"></script>
	<script src="../assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="../assets/js/bootstrap-typeahead.js"></script>
	<script src="../assets/js/mention.js"></script>
	<script src="../assets/plugins/wysihtml-master/dist/wysihtml.min.js"></script>
	<script src="../assets/plugins/wysihtml-master/dist/wysihtml-toolbar.min.js"></script>
	<script src="../assets/plugins/wysihtml-master/parser_rules/advanced_and_extended.js"></script>
	<script src="../assets/plugins/ckeditor/ckeditor.js"></script>
	<script src="../assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
<script src="../assets/js/app_index.min.js"></script>


<script src='http:../assets/tinymce/tinymce.min.js'></script>
 

	<div class="visible-xs visible-sm extendedChecker"></div>

<?php  require_once 'controlador/controlador.php'; ?>
	<script type="text/javascript">
		
$(document).ready(function() {
	$('.cargando').hide();
	<?php if ($_GET['tipo']=='editar'): ?>
	$('#pais').val('<?php echo $data['data'][0]['pais'] ?>').change();
	$('#status').val('<?php echo $data['data'][0]['status'] ?>').change();
	$('#tipo').val('<?php echo $data['data'][0]['tipo'] ?>').change();
	$('#dependiente').val('<?php echo $data['data'][0]['dependiente'] ?>').change();
	<?php endif ?>

});


 


$('#formulario').on('submit', function(e){
e.preventDefault();
$('.cargando').show();
console.log('Envio el formulario');

$.ajax({
	 url: '<?php echo $url; ?>',
	type: 'POST',
	//dataType: 'json',
	data: $('#formulario').serialize(),
})
 .done(function(data) {
  console.log(data);
  response = data.split('-');
  //console.log(response[0]);
if (response[0]==1) {

swal({ 
  title: "Enviado!",
   text: "Se ha procesado con éxito!",
    type: "success" 
  },
  function(){
 $('#formulario')[0].reset();
 <?php if ($_GET['tipo']!='editar'): ?>
 window.location.replace(window.location.href + "?tipo=editar&id="+response[1]+""); 
 <?php else: ?>
location.reload();  
<?php endif ?>


});

}

 

else {

sweetAlert("Oops...", "Consulte este error con su programador!", "error");
}

 
})
.fail(function(data) {
	console.log("error");
	console.log(data);

})
.always(function() {
	console.log("complete");
	$('.cargando').hide();
});

});

/*========================================
=            Buscar             =
========================================*/


$(document).ready(function() {

$('#buscar').on('keyup',  function(event) {
	event.preventDefault();
	buscarArticulos($(this).val());
	/* Act on the event */
});

$('#buscar_cliente').on('keyup',  function(event) {
	event.preventDefault();
	buscarClientes($(this).val());
	/* Act on the event */
});





function buscarArticulos(texto) {


$.ajax({
	url: 'async/buscar.php',
	type: 'POST',
 
	data: {parametro: texto},
})
.done(function(data) {
	console.log("success");
	$('#resultado_busqueda').html(data);
//alert(data);

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});

	
}

function buscarClientes(texto) {


$.ajax({
	url: '../mod_clientes/async/buscar2.php',
	type: 'POST',
 
	data: {parametro: texto},
})
.done(function(data) {
	console.log("success");
	$('#resultado_busqueda2').html(data);
//alert(data);

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});

	
}


});
/*=====  End of Buscar   ======*/

	</script>
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>