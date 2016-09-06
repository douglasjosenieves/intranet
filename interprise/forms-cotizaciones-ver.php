<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}
require_once __DIR__ . '../../db_connect.php';


// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

 
$clave=$_REQUEST['clave'];
$id=$_REQUEST['id'];
 
$clavemd5 = md5($clave); 
//$clave='122';
//$id='1';

 $resul =  mysql_query("SELECT * FROM `cotizaciones` where id = $id");

 
$cotizaciones = array();
while($row =  mysql_fetch_array($resul) ) {
$cotizaciones[] = $row;
 
 
}





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

	.box {
    background: #fff;
    padding: 30px;
    margin: 0 0 4px 0;
}

	.rte p {
    margin: 0 0 0px 0;
    line-height: 21px;
}

.titulos{
font-size: 13px;
    color: #8a8989 !important;

}

#generales > div > div.col-md-8 > h3 {

    font-weight: 700;
    margin: 5px 0 0px 0;

}

	.line {


		    margin-top: 25px;
    border-bottom: 1px solid #ccc;
     
    border-bottom-width: thin;
    font-size: 18px;
    padding-top: 10px;
	}

		#pdf-header{
	background-image: url('../images/3.jpg') ;
  background-repeat: no-repeat;
  background-size: cover;
color: #fff;

}


#tr {

background-color: #bbbbbb !important
 
}




</style>

<style type="text/css">


    @media print {
        div.divFooter {
  margin: auto ;
  position: absolute;
 left: 0; right: 0;
          
         color: #8a8989 !important;
 -webkit-print-color-adjust: exact; 
        }


        .box {
    background: #fff;
    padding: 15px;
    margin: 0 0 4px 0;
}

       .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th{

    padding: 1px 25px;

        }
    }
         
@media print and (-webkit-min-device-pixel-ratio:0){

@page{

margin: auto 0;

 

}
   table tr td{

    padding: auto 25px;

        }


#tr {

  background-color: #1a4567 !important;
    -webkit-print-color-adjust: exact; 
 
}

 

.titulos{
font-size: 13px;
    color: #8a8989 !important;
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

hr {
    border-color: #e6e7ed;
    margin: 2px 0;
}





      }




         </style>
</head>
<body>

<?php define('IVA', 21);
define(MONEDA2, '€')
 ?>

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
				<h1 class="pageTitle hidden-print">
					<a href="#" title="#">Cotizador de servicios (Ver)</a>
					 
				</h1>
				<ol class="breadcrumb hidden-print">
					<li><a href="index.php">Sharpen</a></li>
					<li class="active">Procesos</li>
				</ol>
				
				<div id="generales" class="box rte">
				
				
<div class="row">

<div class="col-xs-8 col-md-8">


<h3 style="color:#f34235 !important">IBEROAMERICANA BROKERS CONSULTING SL.</h3>
<p style="color:#a2a2a2 !important">CIF: B87209615. Dirección: Calle Velázquez, 27, 1º Izquierda. 28001, Madrid,España. Teléfono: +34 914361333. Todos los derechos reservados.</p>
<p style="color:#a2a2a2 !important"> Apartado Legal y Derechos consolidados. Más información: info@cohenyaguirre.es.</p>
<br>


<div class="col-xs-6 col-md-6">

<p> <strong class="titulos">Nombre: </strong><?php echo $cotizaciones[0]['nombre'].' '.$cotizaciones[0]['apellido'] ?></p>
<p> <strong class="titulos">País: </strong><?php echo $cotizaciones[0]['pais'] ?></p>

</div>

<div class="col-xs-6 col-md-6">

<p> <strong class="titulos">Email: </strong><?php echo $cotizaciones[0]['email'] ?></p>
<p> <strong class="titulos">Teléfono: </strong><?php echo $cotizaciones[0]['telefono'] ?></p>


</div>
<div class="col-xs-12 col-md-12">
<p> <strong class="titulos">Comentarios: </strong><?php echo $cotizaciones[0]['comentarios'] ?></p>
</div>


</div>
<div class="col-xs-4 col-md-4" align="right">		
<img src="img/icon-logo.png"> <strong>GEA SYSTEMS</strong>
<br>
<br>
<p> <strong>Lugar:</strong> Madrid, España: <?php echo $cotizaciones[0]['fecha'] ?> </p>
<h3>Cotización:<span style="color:#f34235 !important"><?php echo ' Nº 0000'.$cotizaciones[0]['id'] ?></span></h3>


				</div>

	
</div>
		
					
										
                                 </div>
						


						


              
 

 
 


<div class="box rte box-without-bottom-padding">
				
					
					<div class="tableWrap table-responsive">
						<table class="table table-striped">
							<thead>
								<tr id="tr">
									<th>Id</th>
									<th>Servicio</th>
									<th>Descripción</th>
									<th>Cantidad</th>
									<th>Precio</th>
									<th>Subtotal</th>
								</tr>
							</thead>
							<tbody>






 

 


 
 	<?php 

 	$con = unserialize( $cotizaciones[0]['reglon_id'] );
 	$servicio = unserialize( $cotizaciones[0]['reglon_servicio'] );
 	$descripcion = unserialize( $cotizaciones[0]['reglon_descripcion'] );
 	$cantidad = unserialize( $cotizaciones[0]['reglon_cantidad'] );
 		$precio = unserialize( $cotizaciones[0]['reglon_precio'] );
 		$subtotal = unserialize( $cotizaciones[0]['reglon_subtotal'] );

 foreach ($con as $key => $value) {
 	# code...
 


	




 	 ?>



	<tr>
									<th scope="row"><?php echo  $con[$key]?></th>
									<td><?php echo  $servicio[$key]?></td>
									<td><?php echo  $descripcion[$key]?></td>
									<td><?php echo  $cantidad[$key]?></td>
									<td><?php echo  MONEDA2.$precio[$key]?></td>
									<td><?php echo  MONEDA2.$subtotal[$key]?></td>
								</tr>

 

 
<?php }  ?>


		</tbody>

	<tfoot>

		<tr>
									<th></th>
									<td></td>
									<td></td>
									<td></td>
									<td><strong> Total Parcial</strong></td>
									<td><strong><?php echo MONEDA2.$cotizaciones[0]['reglon_totalparcial']?></strong></td>
								</tr>


								<tr>
									<th></th>
									<td></td>
									<td></td>
									<td></td>
									<td><strong> Tax: <?php echo IVA ?>%</strong></td>
									<td><strong><?php echo MONEDA2.$cotizaciones[0]['reglon_tax']?></strong></td>
								</tr>

									<tr>
									<th></th>
									<td></td>
									<td></td>
									<td></td>
									<td><strong> Total</strong></td>
									<td><strong><?php echo MONEDA2.$cotizaciones[0]['reglon_total']?></strong></td>
								</tr>


								</tfoot>
						</table>
					</div>

<div class="divFooter container" align="center" >
<center>
- *Cotización emitida por Iberoamericana Bróker Consulting SL. En la ciudad de Madrid, España -</center>
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
					<h2 class="boxHeadline">Data Table</h2>
					<h3 class="boxHeadlineSub">Subtitle of the table goes here</h3>
					
					<div class="tableWrap dataTable table-responsive js-select">
						<table class="table js-datatable">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>telf. Móvil</th>
									<th>email</th>
								</tr>
							</thead>
							<tbody>
								
								 
				

							<?php 
			
				$i=0;
				$resul =  mysql_query("SELECT * FROM `contactos_web`");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				// echo $row['nombre'];
				$contactos_web['contactos_web'][]=$row;
			 
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>

				
								<tr class="contactos" >
									<td scope="row"><?php echo $contactos_web['contactos_web'][$i]['id']; ?></td>
									<td><?php echo $contactos_web['contactos_web'][$i]['nombres']; ?></td>
									<td><?php echo $contactos_web['contactos_web'][$i]['apellidos']; ?></td>
									<td><?php echo $contactos_web['contactos_web'][$i]['movil']; ?></td>
									<td><?php echo $contactos_web['contactos_web'][$i]['email']; ?></td>
									 
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


<button type="button" onclick="window.print();" class="btn bg-indigo hidden-print">Imprimir  <i class="fa fa-print"></i></button>
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
nombre = $('td:eq(1)',this).html();
apellido = $('td:eq(2)',this).html();
telefono = $('td:eq(3)',this).html();
email = $('td:eq(4)',this).html();  
           agregar_item_contacto(id , nombre, apellido, telefono, email); 
 
swal('Agregado '+nombre)
      });
/*=====  End of Evento que se le da al tr en el modal para seleccional los productos  ======*/

function agregar_item_contacto(id, nombre, apellido, telefono, email) {

$('#id_contacto').val(id);
	$('#nombre').val(nombre);
	$('#apellido').val(apellido);
	$('#telefono').val(telefono);
	$('#email').val(email);
	// body...
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

	$('input').prop('disabled', 'disabled');
$( "#pais" ).prop( "disabled", true );
 $("#textarea-autosize").attr("disabled","disabled"); 


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