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
						 <div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="direccion">Dirección:</label>
															<input type="text" required class="form-control" name="direccion" id="direccion" placeholder="Dirección:">
														</div>
													</div>
							<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Ciudad</label>
									<select name="ciudad" required class="js-select">
										<option value="" disabled selected>- Select ciudad-</option>
										<option value="MADRID">Madrid</option>
										<option value="BARCELONA">Barcelona</option>
										<option value="VALENCIA">Valencia</option>
                                        <option value="MALAGA">Malaga</option>
										
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 i">
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
.done(function() {
	console.log("success");
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
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>