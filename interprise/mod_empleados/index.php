<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}

require_once '../../db_connect.php';
// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  

$id=$_GET['id'];
 
if (isset($id)) {
	# code...

 $resul =  mysql_query("SELECT * FROM  ".TABLA." where id =$id");
$data = array();
while($row =  mysql_fetch_array($resul) ) {
$data['data'][] = $row;
}
}



?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Ficha de empleados</title>
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
	
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
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
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#">Ficha de empleados</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="../index.php">Panel de controlo</a></li>
					<li class="active">Menu</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline">Ficha</h2>
					<h3 class="boxHeadlineSub">Empleado</h3>
<div class="row">


<div class="col-xs-12 col-sm-2">
<div class="form-group">
<label for="referencia">Nº Referencia</label>
<input type="text" readonly required class="form-control" name="referencia" id="referencia" placeholder="Nº Referencia">
</div>
</div>




<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="editado_por" id="editado_por" placeholder="Elaborado Por:">


<?php require_once '../asesor_funtion.php'; ?>


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

<form id="formulario">
				<a  href="reporte.php" class="btn bg-blue">Ver Empleados</a>

					 <hr>
		<div class="row">
					 
					 <div class="col-xs-12 col-sm-3">
					 <div class="form-group">
					 <label for="basicInput">Primer Nombre</label>
					 <input type="text" value="<?php echo $ficha['ficha_contacto'][0]['primer_nombre'] ?>" required class="form-control" name="primer_nombre" id="primer_nombre" placeholder="Primer Nombre">
					 </div>
					 </div>
					 			 
					


					 
					 <div class="col-xs-12 col-sm-3">
					 <div class="form-group">
					 <label for="basicInput">Segundo Nombre</label>
					 <input type="text" value="<?php echo $ficha['ficha_contacto'][0]['segundo_nombre'] ?>" required class="form-control" name="segundo_nombre" id="segundo_nombre" placeholder="Segundo Nombre">
					 </div>
					 </div>
					 
					 

					 
					 <div class="col-xs-12 col-sm-3">
					 <div class="form-group">
					 <label for="basicInput">Primer Apellido</label>
					 <input type="text" value="<?php echo $ficha['ficha_contacto'][0]['primer_apellido'] ?>" required class="form-control" name="primer_apellido" id="primer_apellido" placeholder="Primer Apellido">
					 </div>
					 </div>


					 
					 <div class="col-xs-12 col-sm-3">
					 <div class="form-group">
					 <label for="basicInput">Segundo Apellido</label>
					 <input type="text" value="<?php echo $ficha['ficha_contacto'][0]['segundo_apellido'] ?>" required class="form-control" name="segundo_apellido" id="segundo_apellido" placeholder="Segundo Apellido">
					 </div>
					 </div>
					 
					  </div>

					  <div class="row">
					  	


					  	
					  	<div class="col-xs-12 col-sm-4">
					  	<div class="form-group">
					  	<label for="basicInput">Numero de Cedula</label>
					  	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['numero_cedula'] ?>" required class="form-control" name="numero_cedula" id="numero_cedula" placeholder="Numero de Cedula">
					  	</div>
					  	</div>


					  	
				<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Estado Civil</label>
									<select name="estado_civil"  id="estado_civil" class="js-select ">
										<option value="">- Select -</option>
										<option value="SOLTERO">SOLTERO(A)</option>
										<option value="CASADO">CASADO(A)</option>
										<option value="DIVIRCIADO">DIVIRCIADO(A)</option>
										<option value="COMCUBINATO">COMCUBINATO</option>
										<option value="VIUDO">VIUDO</option>
									 
								 
									</select>
								</div>
							</div>


					  	
					  	<div class="col-xs-12 col-sm-4">
					  	<div class="form-group">
					  	<label for="basicInput">Fecha de Nacimiento</label>
					  	<input type="date" value="<?php echo $ficha['ficha_contacto'][0]['fecha_nacimiento'] ?>" required class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de Nacimiento">
					  	</div>
					  	</div>
					  	
					  	


					  	
			
					  	
					  	
					  </div>

					  <div class="row">
					  	


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Fecha de ingreso</label>
<input type="date" value="<?php echo $ficha['ficha_contacto'][0]['fecha_ingreso'] ?>" required class="form-control" name="fecha_ingreso" id="fecha_ingreso" placeholder="Fecha de ingreso">
</div>
</div>



		  	<div class="col-xs-12 col-sm-8">
					  	<div class="form-group">
					  	<label for="basicInput">Domicilio</label>
					  	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['domicilio'] ?>" required class="form-control" name="domicilio" id="domicilio" placeholder="Domicilio">
					  	</div>
					  	</div>


					  </div>

					  <div class="row">
					  	


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Email personal</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['email_personal'] ?>" required class="form-control" name="email_personal" id="email_personal" placeholder="Email personal">
</div>
</div>




<div class="col-xs-12 col-sm-2">
<div class="form-group">
<label for="basicInput">Rif</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['rif'] ?>" required class="form-control" name="rif" id="rif" placeholder="Rif">
</div>
</div>



<div class="col-xs-12 col-sm-6">
<div class="form-group">
<label for="basicInput">Dirección fiscal</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['direccion_fiscal'] ?>" required class="form-control" name="direccion_fiscal" id="direccion_fiscal" placeholder="Direccion fiscal">
</div>
</div>




					  </div>


					  <div class="row">
					  	

					  	
					  	<div class="col-xs-12 col-sm-6">
					  	<div class="form-group">
					  	<label for="basicInput">Cargo</label>
					  	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['cargo'] ?>" required class="form-control" name="cargo" id="cargo" placeholder="Cargo">
					  	</div>
					  	</div>


					  	
					  	<div class="col-xs-12 col-sm-6">
					  	<div class="form-group">
					  	<label for="basicInput">Salario</label>
					  	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['salario'] ?>" required class="form-control" name="salario" id="salario" placeholder="Salario">
					  	</div>
					  	</div>
					  	
					  	

					  	
					  
					  	
					  </div>

					  <div class="row">
					  	
	<div class="col-xs-12 col-sm-2">
					  	<div class="form-group">
					  	<label for="basicInput">Acumulado PSS</label>
					  	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['acumulado_pss'] ?>" required class="form-control" name="acumulado_pss" id="acumulado_pss" placeholder="Acumulado PSS">
					  	</div>
					  	</div>


					  		<div class="col-xs-12 col-sm-2">
					  	<div class="form-group">
					  	<label for="basicInput">Disponible 75%</label>
					  	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['disponible75'] ?>" required class="form-control" name="disponible75" id="disponible75" placeholder="Disponible 75%">
					  	</div>
					  	</div>


  	<div class="col-xs-12 col-sm-2">
					  	<div class="form-group">
					  	<label for="basicInput">Interés A. base PSS</label>
					  	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['interes_acumulado'] ?>" required class="form-control" name="interes_acumulado" id="interes_acumulado" placeholder="Interes Acumulado base PSS">
					  	</div>
					  	</div>


					  	
					  	<div class="col-xs-12 col-sm-3">
					  	<div class="form-group">
					  	<label for="basicInput">Adelanto Sobre PSS</label>
					  	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['adelanto_pss'] ?>" required class="form-control" name="adelanto_pss" id="adelanto_pss" placeholder="Adelanto Sobre PSS">
					  	</div>
					  	</div>


					  	
					  	<div class="col-xs-12 col-sm-3">
					  	<div class="form-group">
					  	<label for="basicInput">Adelanto de interés sobre PSS</label>
					  	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['adelanto_interes_sobre_pss'] ?>" required class="form-control" name="adelanto_interes_sobre_pss" id="adelanto_interes_sobre_pss" placeholder="Adelanto de interes sobre PSS">
					  	</div>
					  	</div>
					  	
					  	

					  </div>

					  <div class="row">
					  	
 			  		  	
					


					  	<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Sede asignada</label>
									<select name="sede" id="sede" class="js-select ">
									 <?php require_once '../paises.php'; ?>
								 
									</select>
								</div>
							</div>
					  	
					  	
					  </div>

					  <div class="row">
					  	


<div class="col-xs-12 col-sm-6">
<div class="form-group">
<label for="basicInput">Banco</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['banco'] ?>" required class="form-control" name="banco" id="banco" placeholder="Banco">
</div>
</div>



<div class="col-xs-12 col-sm-6">
<div class="form-group">
<label for="basicInput">Numero de cuenta</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['Numero_cuenta'] ?>" required class="form-control" name="Numero_cuenta" id="Numero_cuenta" placeholder="Numero de cuenta">
</div>
</div>


					  </div>



					  <div class="row">
					  	



<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Teléfono Movil</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['telefono_movil'] ?>" required class="form-control" name="telefono_movil" id="telefono_movil" placeholder="Telefono Movil">
</div>
</div>



<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Teléfono Fijo</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0][''] ?>" required class="form-control" name="telefono_fijo" id="telefono_fijo" placeholder="Telefono Fijo">
</div>
</div>
	


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Persona contacto emergencia</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['persona_contacto_emergencia'] ?>" required class="form-control" name="persona_contacto_emergencia" id="persona_contacto_emergencia" placeholder="Persona contacto emergencia">
</div>
</div>

</div>

<div class="row">
	


	
	<div class="col-xs-12 col-sm-4">
	<div class="form-group">
	<label for="basicInput">Teléfono emergencia</label>
	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['telefono_emergencia'] ?>" required class="form-control" name="telefono_emergencia" id="telefono_emergencia" placeholder="Telefono emergencia">
	</div>
	</div>


	
	<div class="col-xs-12 col-sm-4">
	<div class="form-group">
	<label for="basicInput">Tipo de sangre</label>
	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['tipo_sangre'] ?>" required class="form-control" name="tipo_sangre" id="tipo_sangre" placeholder="Tipo de sangre">
	</div>
	</div>
	
	
</div>

<div class="row">
	<div class="col-md-12">
<div class="form-group">
									<label for="textarea-autosize">Nucleo Familiar</label>
									<textarea id="textarea-autosize" name="nucleo_familiar" class="js-autogrow form-control" placeholder="Please start typing and press few times 'enter'..." rows="2" style="overflow: hidden; word-wrap: break-word; height: 74px;"></textarea>
								</div></div>

</div>

	 <div class="row">
					 	
					 
					 	
					 	<div class="col-xs-12 col-sm-4">
					 	<div class="form-group">
					 	<label for="basicInput">Usuario Id</label>
					 	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['user_id'] ?>" required class="form-control" name="user_id" id="user_id" placeholder="Usuario Id">
					 	</div>
					 	</div>


					 	
					 	<div class="col-xs-12 col-sm-4">
					 	<div class="form-group">
					 	<label for="basicInput">Entrada Id</label>
					 	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['hand_id'] ?>" required class="form-control" name="hand_id" id="hand_id" placeholder="Entrada Id">
					 	</div>
					 	</div>
					 	
					 	
					 </div>

<div class="box rte">
			 
<?php 

 if ($_GET['tipo']=='editar') {
 	$botonNombre= 'Editar';
 	$url= 'envios/update.php';
 }

 else{
	$botonNombre= 'Guardar';
	$url= 'envios/insert.php';

 }
 ?>
 

<input type="reset" value="Reset" class="btn bg-gray">
<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary"><?php echo $botonNombre; ?> <i class="fa fa-save"></i></button><span class="cargando"><i class='fa fa-circle-o-notch fa-spin'></i>Loading...</span>
					 



					
				</div> <!-- box  -->


					  </div>

					 </form> 
					 <!--====  End of AQUI VA EL CONTENIDO DEL SITE-  ====-->
  
				
				</div>
				</div>
				
			
			</div>
		</div>
	<!-- </div> -->
	
	
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
	<script src="../assets/js/app.min.js"></script>
<script src='http://cdn.tinymce.com/4/tinymce.min.js'></script>
 

	<div class="visible-xs visible-sm extendedChecker"></div>

<script type="text/javascript">
		
$(document).ready(function() {
	$('.cargando').hide();
   $('#sexo').val('<?php echo $data['data'][0]['sexo'] ?>').change();

	$('#tipo').val('<?php echo $data['data'][0]['tipo'] ?>').change();
	$('#anulado').val('<?php echo $data['data'][0]['anulado'] ?>').change();
	$('#id_grupo').val('<?php echo $data['data'][0]['id_grupo'] ?>').change();
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
	//console.log("success");
if (data==1) {

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

});
/*=====  End of Buscar   ======*/

	</script>
	
 
	
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>