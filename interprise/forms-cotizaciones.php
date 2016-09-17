<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');




}



require_once '../db_connect.php';
require_once '../PHPPaging.lib.php';

// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   
?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Cotizaciones online</title>
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
	<link rel="stylesheet" href="assets/sweetalert/sweetalert-master/dist/sweetalert.css">
	 
	<!-- Modernizr -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script>

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<style type="text/css">
	.servicios {
cursor:pointer; cursor: hand
	}

.encabezado {

    background: #fe5621;
    color: #fff;
    font-size: 25px;

}
#cliente {
    font-weight: bold;
	
}

</style>
</head>
<body>

<?php define('IVA', 21); ?>

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
					<a href="#" title="#">Cotizador de servicios</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="dashboard.html">Sharpen</a></li>
					<li class="active">Procesos</li>
				</ol>
				
				<div id="generales" class="box rte">
					<h2 class="boxHeadline">Cotizador</h2>
					<h3 class="boxHeadlineSub">On line.</h3>
					
					

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





<input type="hidden" value="<?php echo $ficha['ficha_contacto'][0]['id_contacto'] ?>" required class="form-control" name="id_contacto" id="id_contacto" placeholder="Id Contacto:">


<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label for="basicInput">Cliente</label>

   <div class="input-group">
	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['cliente'] ?>" required class="form-control" name="cliente" id="cliente" placeholder="Cliente">
	<div class="input-group-addon btn btn-primary btn" data-toggle="modal" data-target="#myModalContactos"><i class="fa fa-user"></i></div></div>

	</div>
	</div>
											 

                                 </div>
						


						<div class="row">
							



						
						
							
							
							
							
								
								
								<div class="col-xs-12 col-sm-4">
														<div class="form-group">
														<label id="nombre_abrir" for="basicInput">Contacto Nombres:</abel>
																 

																	
											<input type="text" readonly value="<?php echo $ficha['ficha_contacto'][0]['nombres'] ?>" required class="form-control" name="nombre" id="nombre" placeholder="Contacto Nombres:">
											
																</div>
															</div>
								

								
									<div class="col-xs-12 col-sm-4">
																<div class="form-group">
																	<label for="basicInput">Contacto Apellidos:</label>
											<input type="text" readonly value="<?php echo $ficha['ficha_contacto'][0]['apellidos'] ?>" required class="form-control" name="apellido" id="apellido" placeholder="Contacto Apellidos:">
																</div>
															</div>



															<div class="row customSelectWrap">
							<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>País</label>
									<select disabled  required  id="pais" name="pais" class="js-select ">
										<option value="">- Select país -</option>
										<option value="VENEZUELA">Venezuela</option>
										<option value="ESPANA">España</option>
											<option value="USA">Usa</option>
											<option value="OTRO">Otro</option>
								 
									</select>
								</div>
							</div></div>


							</div>


							<div class="row">
							
						
						
							<div class="col-xs-12 col-sm-6">
														<div class="form-group">
															<label for="basicInput">E-mail:</label>
									<input readonly type="email" value="<?php echo $ficha['ficha_contacto'][0]['email'] ?>" required class="form-control" name="email" id="email" placeholder="E-mail:">
														</div>
													</div>


													<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="basicInput">Teléfono móvil:</label>
			         <input type="text" readonly value="<?php echo $ficha['ficha_contacto'][0]['movil'] ?>" required class="form-control" name="telefono" id="telefono" placeholder="Teléfono móvil:">
								</div>
							</div>

                       </div>

               

	                  <hr />


	                  <div class="row">
	                  	
 
 
 <div class="col-xs-12 col-sm-4">
 <div class="form-group">
 <label for="basicInput">Fecha de la Cotización</label>
 <input type="date" value="<?php echo $ficha['ficha_contacto'][0]['fechaCotizacion'] ?>" required class="form-control" name="fechaCotizacion" id="fechaCotizacion" placeholder="Fecha de la Cotizacion">
 </div>
 </div>



 
 <div class="col-xs-12 col-sm-4">
 <div class="form-group">
 <label for="basicInput">Fecha de Vencimiento</label>
 <input type="date" value="<?php echo $ficha['ficha_contacto'][0]['fechaVencimiento'] ?>" required class="form-control" name="fechaVencimiento" id="fechaVencimiento" placeholder="Fecha de Vencimiento">
 </div>
 </div>
 

 
 <div class="col-xs-12 col-sm-4">
 <div class="form-group">
 <label for="basicInput">Cotización #</label>
 <input type="text" value="<?php echo $ficha['ficha_contacto'][0]['cotizacionNumero'] ?>" required class="form-control" name="cotizacionNumero" id="cotizacionNumero" placeholder="Cotizacion #">
 </div>
 </div>
 
 


	                  </div>

	                  <div class="row">
	                  	
	                  	
	                  	<div class="col-xs-12 col-sm-4">
	                  	<div class="form-group">
	                  	<label for="basicInput">Orden #</label>
	                  	<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['orden'] ?>" required class="form-control" name="orden" id="orden" placeholder="Orden #">
	                  	</div>
	                  	</div>
	                  	



<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Descuento</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['descuento'] ?>" required class="form-control" name="descuento" id="descuento" placeholder="Descuento">
</div>
</div>



<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Comentarios</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['comentarios'] ?>" required class="form-control" name="comentarios" id="comentarios" placeholder="Comentarios">
</div>
</div>


	                  </div>
 
       <hr />
<button type="button" class="btn btn-primary btn" data-toggle="modal" data-target="#myModal">Servicios <i class="fa fa-plus"></i></button>

<button type="button" id="remove_hijos" class="btn bg-red">Remover <i class="fa fa-eraser"></i></button>
 
<div class="row">
<center  >
<h5>
	<div class="col-xs-12 col-sm-2 encabezado">Id</div>
		<div class="col-xs-12 col-sm-4 encabezado">Servicio</div>
			<div class="col-xs-12 col-sm-2 encabezado">Cantidad</div>
				<div class="col-xs-12 col-sm-2 encabezado">Precio</div>
					<div class="col-xs-12 col-sm-2 encabezado">Subtotal</div>
					</h5>

</center>

</div>


 


 <div class="row"  id="hijos">
 	

 </div>
 
 <div class="row">
 	<div class="col-xs-12 col-sm-8"></div>
 	<div class="col-xs-12 col-sm-2"><center><h3>Total parcial:</h3></center></div>
 	
 	<div class="col-xs-12 col-sm-2">
 	<div class="form-group">
 	<label for="basicInput"></label>
 	<input type="number" readonly value="<?php echo $ficha['ficha_contacto'][0]['reglon_totalparcial'] ?>" required class="form-control" name="reglon_totalparcial" id="reglon_totalparcial" placeholder="Total parcial:">
 	</div>
 	</div>
 	

 </div>

  <div class="row">
 	<div class="col-xs-12 col-sm-8"></div>
 	<div class="col-xs-12 col-sm-2"><center><h3>Tax: <?php echo IVA ?>%</h3></center></div>
 	
 	<div class="col-xs-12 col-sm-2">
 	<div class="form-group">
 	<label for="basicInput"></label>
 	<input type="number" readonly value="<?php echo $ficha['ficha_contacto'][0]['reglon_tax'] ?>" required class="form-control" name="reglon_tax" id="reglon_tax" placeholder="Tax:">
 	</div>
 	</div>
 	

 </div>

 <div class="row">
 	<div class="col-xs-12 col-sm-8"></div>
 	<div class="col-xs-12 col-sm-2"><center><h3>Total:</h3></center></div>
 	
 	<div class="col-xs-12 col-sm-2">
 	<div class="form-group">
 	<label for="basicInput"></label>
 	<input type="number" readonly value="<?php echo $ficha['ficha_contacto'][0]['total'] ?>" required class="form-control" name="reglon_total" id="total" placeholder="Total:">
 	</div>
 	</div>
 	

 </div>
        </div> <!-- box rte -->


<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header rte">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Servicios</h2>
				</div>
				<div class="modal-body">
					<!-- Table Colored -->
			 
					
					<div class="tableWrap table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th># Id</th>
									<th>Servicio</th>
									<th>Descripcion</th>
									<th>Precio</th>
								 
								</tr>
							</thead>
							<tbody>

							<?php 
			
				$i=0;
				$resul =  mysql_query("SELECT * FROM `servicios`");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				// echo $row['nombre'];
				$servicios['servicios'][]=$row;
			 
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>

				
								<tr class="servicios" >
									<td scope="row"><?php echo $servicios['servicios'][$i]['id']; ?></td>
									<td><?php echo $servicios['servicios'][$i]['nombre']; ?></td>
									<td><?php echo $servicios['servicios'][$i]['descripcion']; ?></td>
									<td><?php echo $servicios['servicios'][$i]['precio']; ?></td>
									 
								</tr>
								 <?php 
			
		 
				 $i++; }
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
							</tbody>
						</table>
					</div>
				 


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default"  data-dismiss="modal">Ok</button>
					 
				</div>
			</div>
			
	</div>
			</div><!-- mymodal -->



<!-- Modal contactos-->
	<div id="myModalContactos" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header rte">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Contactos</h2>
				</div>
				<div class="modal-body">
					<!-- Table Colored -->
			 
					
				<div class="box box-without-bottom-padding">
				 
					<div class="tableWrap dataTable table-responsive js-select">
						<table class="table js-datatable ">
							<thead>
								<tr >
									<th>Id</th>
									<th>Cliente</th>
									<th>Contacto Nombre</th>
									<th>Contacto Apellido</th>
									<th>telf. Móvil</th>
									<th>email</th>
									<th class="hidden">pais</th>
								</tr>
							</thead>
							<tbody>
								
								 
				

							<?php 
			
				$i=0;
				$resul =  mysql_query("SELECT * FROM `contactos_web` where anulado <> 1");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				// echo $row['nombre'];
				$contactos_web['contactos_web'][]=$row;
			 
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>

				
								<tr class="contactos" style=" cursor: pointer; cursor: hand;">
									<td scope="row"><?php echo $contactos_web['contactos_web'][$i]['id']; ?></td>
                                     <td><?php echo $contactos_web['contactos_web'][$i]['cliente']; ?></td>
									<td><?php echo $contactos_web['contactos_web'][$i]['nombres']; ?></td>
									<td><?php echo $contactos_web['contactos_web'][$i]['apellidos']; ?></td>
									<td><?php echo $contactos_web['contactos_web'][$i]['movil']; ?></td>
									<td><?php echo $contactos_web['contactos_web'][$i]['email']; ?></td>
									<td class="hidden"><?php echo $contactos_web['contactos_web'][$i]['pais']; ?></td>
									 
								</tr>
								 <?php 
			
		 
				 $i++; }
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
									</tbody>
						</table>
					</div>
				</div>
				 


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default"  data-dismiss="modal">Ok</button>
					 
				</div>
			</div>
	</div>
			</div><!-- Modal contactos-->



		</div>
	</div>




				<div class="box rte">
				<center>


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
	<script src="assets/js/datatables.min.js"></script>
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


 
	<script type="text/javascript">

 
/*============================================================================================
=            Evento que se le da al tr en el modal para seleccional los productos            =
============================================================================================*/

$("body").on("click",".contactos",function(event){
            event.preventDefault();

          
id = $('td:eq(0)',this).html();
cliente = $('td:eq(1)',this).html();
nombre = $('td:eq(2)',this).html();
apellido = $('td:eq(3)',this).html();
telefono = $('td:eq(4)',this).html();
email = $('td:eq(5)',this).html();
pais = $('td:eq(6)',this).html();  

//alert(pais);
           agregar_item_contacto(id , nombre, apellido, telefono, email,pais, cliente); 
 
swal('Agregado '+nombre)
      });
/*=====  End of Evento que se le da al tr en el modal para seleccional los productos  ======*/

function agregar_item_contacto(id, nombre, apellido, telefono, email,pais, cliente) {

$('#id_contacto').val(id);
	$('#nombre').val(nombre);
	$('#apellido').val(apellido);
	$('#telefono').val(telefono);
	$('#email').val(email);
	$('#cliente').val(cliente);
	//$('#pais').val(pais);

	$('#pais option[value='+pais+']').prop('selected', 'selected').change();
	$('#myModalContactos').modal('hide');
}

 


/*======================================
=            calcula el iva            =
======================================*/
function calcula_iva() {

var sum=0;
$('.subtotal').each(function(index, el) {
   sum += Number($(this).val());
	
});
//$('#total').val(sum);

iva = sum * 21 /100
$('#reglon_tax').val(iva);


totalfin = sum+iva;
$('#total').val(totalfin);
	
}


/*=====  End of calcula el iva  ======*/



/*==============================================
=            RECORRE LOS SUBTOTALES            =
==============================================*/

function total5() {

var sum=0;
$('.subtotal').each(function(index, el) {
   sum += Number($(this).val());
	
});
//$('#total').val(sum);

$('#reglon_totalparcial').val(sum);
	// body...
}

/*=====  End of RECORRE LOS SUBTOTALES  ======*/


/*=====  End of consulta de servicios  ======*/

$(document).ready(function() {

$('#myModal').on('hidden.bs.modal', function () {
  total5();  // do something…
  calcula_iva();
})


$("body").on("keyup change",".cantidad",function(event){
    event.preventDefault();
subtotal();
total5();
calcula_iva();
});


/*============================================================================
=            RECORRO Y VERIFICO LOS SUBTOTALES AL HACER UN CAMBIO            =
============================================================================*/

function subtotal() {
	
$('.item_hijos').each(function(index, el) {

precio = $('.precio').eq(index).val();
cantidad = $('.cantidad').eq(index).val();

//alert(precio );
total = cantidad * precio;

$('.subtotal').eq(index).val(total);


	
});


}
/*=====  End of RECORRO Y VERIFICO LOS SUBTOTALES AL HACER UN CAMBIO  ======*/







/*============================================================================================
=            Evento que se le da al tr en el modal para seleccional los productos            =
============================================================================================*/

$("body").on("click",".servicios",function(event){
            event.preventDefault();

          
           id = $('td:eq(0)',this).html();
           nombre = $('td:eq(1)',this).html();
           descripcion = $('td:eq(2)',this).html();
           precios = $('td:eq(3)',this).html();  
           agregar_item(id , nombre,precios,descripcion); 
 
swal('Agregado '+nombre)
      });

/*=====  End of Evento que se le da al tr en el modal para seleccional los productos  ======*/



   



/*====================================================
=            Agrega los items en la tabla            =
====================================================*/






function agregar_item(id, nombre, precios, descripcion) {

$.get("cotizador_items.php?id="+id+"&nombre="+nombre+"&precio="+precios+"&descripcion="+descripcion   ,function (dados) { 
$("#hijos").append(dados);});



}


/*=====  End of Agrega los items en la tabla  ======*/










	
 

$('#remove_hijos').on('click',  function(event) {
	event.preventDefault();
console.log('Le di clck a remove hijos');


  var n = $( ".item_hijos" ).length;
 
console.log(n);


$('.item_hijos:last').remove();
total5();
calcula_iva();
});

	
});
 
/*================================
=            DROPZONE            =
================================*/
/*

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
    maxFilesize: 1, // MB
    maxFiles: 5, //CANTIDAD DE ARCHIVOS PERMITIDOS
    addRemoveLinks: true, ///MOSTRAR EL LINK DE REMOVER IMAGEN
    acceptedFiles: 'image/*,.pdf', //SOLO ACEPTAR IMAGEN FORMATO
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


 
   
});

*/
 
/*================================
=         CIERRE   DROPZONE            =
================================*/

$(document).ready(function() {

//$('#pais').val('VENEZUELA');

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
	url: 'envios/cotizador-envios-insert.php',
	type: 'POST',
	//dataType: 'json',
	data: $('#formulario').serialize(),
})
.done(function(data) {
	console.log(data);
	//console.log("success");
if (data == 'true') {
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