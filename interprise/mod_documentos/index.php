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


require_once '../../vendor/autoload.php';

					 

 ?>	


<!doctype html>
<html class="no-js" lang="">

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
	<link rel="stylesheet" href="mi.css">
	
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
					<a href="#" title="#">Documentos Auto Demo</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="../index.php">Panel de controlo</a></li>
					<li class="active">Menu</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline">Documentos</h2>
					<h3 class="boxHeadlineSub">Generador de documentos</h3>
<div class="row">


<div class="col-xs-12 col-sm-2">
<div class="form-group">
<label for="referencia">Nº Referencia</label>
<input type="text" readonly required class="form-control" value="<?php echo $data['data'][0]['id'] ?>" name="referencia" id="referencia" placeholder="Nº Referencia">

</div>
</div>


<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="elaborado_por" id="elaborado_por" placeholder="Elaborado Por:">

 <input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="editado_por" id="editado_por" placeholder="Elaborado Por:">






<?php require_once '../asesor_funtion.php'; ?>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Usuario::</label>
<input type="text" disabled value="<?php echo nombreAsessor($_SESSION['usuario']['Id'])?>" required class="form-control" name="elaborado" id="elaborado" placeholder="Elaborado:">
</div>
</div>


</div>
					
				 <!--====================================================
					 =            AQUI VA EL CONTENIDO DEL SITE-            =
					 =====================================================-->
					 
<div class="container">
	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Paso 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user "></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Paso 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Paso 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-send"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form"  id="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Paso 1</h3>
                        <p>Seleccione un contacto!</p>
                        <div>
   <div class="row"> 
<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Buscar:</label>
<input type="text" autocomplete="off" value="<?php echo $data['data'][0]['buscar'] ?>" class="form-control" name="buscar"  id="buscar" placeholder="Buscar:" style="background-color: #accead; font-weight: 800;">
</div>

<div >
	<ul id="resultado_busqueda">
		 
	</ul>
</div>

<div id="contactoSelect">
	

</div>
</div>
</div>                     	
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button disabled="true" id="paso1" type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Paso 2</h3>
                        <p>Seleccione una opción de negocio!</p><br>

                           <div class="row"> 

                           <div class="radiobuttons">
							<label>
								<input type="radio" name="radio" data-nombre="franquicias" class="radio">
								<span>Franquicias</span>
							</label>
							<label>
								<input type="radio" name="radio" data-nombre="comercio" class="radio" checked>
								<span>Fondos de Comercio</span>
							</label>
						 
						</div>
<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Buscar opción:</label>
<input type="text" autocomplete="off" value="<?php echo $data['data'][0]['buscar'] ?>" class="form-control" name="buscar" id="buscar_opcion" placeholder="Buscar:" style="background-color: #accead; font-weight: 800;">
</div>

<div >
	<ul id="resultado_busqueda_opcion">
		 
	</ul>
</div>

<div id="contactoSelect_opcion">
	

</div>
</div>
</div>        
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button  disabled="true" id="paso2" type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Paso 3</h3>
                        
<div class="row">
                        <div class="col-xs-12 col-sm-6 i">
								<div class="form-group">
									<label>Documento a generar</label>
									<select name="contrato"  id="contrato" class="form-control ">
										<option value="">- Documento -</option>
										<option value="DUE DILLIGENCE">Due Dilligence</option>
									 
								 
									</select>
								</div>
							</div>
<div class="col-xs-12 col-sm-12 i">
                        	<div class="form-group checkboxes">
							<label>
								<input type="checkbox" name="email" value="si">
								<span>Notificar por Email al cliente.</span>
							</label>
						</div>
</div>
						</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <!-- <li><button type="button" class="btn btn-default next-step">Skip</button></li> -->
                            <li><button disabled="true" id="paso3" disabled="true"  type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane text-success" role="tabpanel" id="complete">
                        <h3>Completado</h3>
                        <p>Descarge el documento en el boton Descargar.</p>
                        <a id="descargar" class="btn btn-primary" href="#" role="button"> <i class="fa fa-download"></i> Descargar</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>


				
				</div><!-- box rate -->
				

				 <!--====  End of AQUI VA EL CONTENIDO DEL SITE-  ====-->
				</div> <!-- end container -->
				
				
			
			</div> <!-- end extended -->
			
		</div> <!-- end pageWrap -->
 
	
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
<script src='http://cdn.tinymce.com/4/tinymce.min.js'></script>
 
 

	<div class="visible-xs visible-sm extendedChecker"></div>


<script type="text/javascript">
	

	$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>


 <script type="text/javascript">
 	
/*========================================
=            Buscar             =
========================================*/


$(document).ready(function() {

$('#buscar').on('keyup',  function(event) {
	event.preventDefault();
	buscarArticulos($(this).val());
	/* Act on the event */
});

$('#buscar_opcion').on('keyup',  function(event) {
	event.preventDefault($(this).val());

franquicias = $('.radio[data-nombre="franquicias"]').prop( "checked");

console.log(franquicias);
if (franquicias== true) {


		fichas_ex($(this).val());
} else {

		fichas_nor($(this).val());
}


	/* Act on the event */
});



function buscarArticulos(texto) {


$.ajax({
	url: '../mod_clientes/async/buscar_contacto_doc.php',
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
function fichas_nor(texto) {


$.ajax({
	url: '../mod_asig_fichas_exclusivas/async/fichasNormales.php',
	type: 'POST',
 
	data: {parametro: texto},
})
.done(function(data) {
	console.log("success");
	$('#resultado_busqueda_opcion').html(data);
//alert(data);

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});

	
}


function fichas_ex(texto) {


$.ajax({
	url: '../mod_asig_fichas_exclusivas/async/fichasFranquicias.php',
	type: 'POST',
 
	data: {parametro: texto},
})
.done(function(data) {
	console.log("success");
	$('#resultado_busqueda_opcion').html(data);
//alert(data);

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});

	
}


/*==============================================
=            DETECTO CUAL LI APRETE            =
==============================================*/

$('body').on('click', '.contactos', function(event) {
	event.preventDefault();
$('#contactoSelect').html('');

	/* Act on the event */
$don = $(this).attr('data-nombre');
 
//alert(nombre);
 
$pasaporte = $(this).attr('data-documento');
$direccion = $(this).attr('data-direccion');
$tel = $(this).attr('data-tel');
$email = $(this).attr('data-email');
$fecha_contratacion= $(this).attr('data-fechacontratacion');
$nacionalidad= $(this).attr('data-nacionalidad');




$('#contactoSelect').append('A nombre de:<input type="text" readonly value="'+$don+'" name="don" required class="form-control">');
$('#contactoSelect').append('Pasaporte:<input type="text" readonly value="'+$pasaporte+'" name="pasaporte" required class="form-control">');
$('#contactoSelect').append('Dirección:<input type="text" readonly value="'+$direccion+'" name="direccion" required class="form-control">');
$('#contactoSelect').append('Teléfono:<input type="text" readonly value="'+$tel+'" name="tel" required class="form-control">');
$('#contactoSelect').append('Email:<input type="text" readonly value="'+$email+'" name="email" required class="form-control">');
$('#contactoSelect').append('Fecha de Contratación:<input type="text" readonly value="'+$fecha_contratacion+'" name="fecha_contratacion" required class="form-control">');

$('#contactoSelect').append('Nacionalidad:<input type="text" readonly value="'+$nacionalidad+'" name="nacionalidad" required class="form-control">');
$('.contactos').remove();
$('#contactoSelect input').each(function(index, el) {
	
var i = 0;
	if ($(this).val()=='') {

alert('El dato "'+ $(this).attr('name')+ '" esta en blanco, complete para continuar');
 i++;
	}


if (i==0) {

	$('#paso1').removeAttr("disabled");
}
else {

$('#paso1').attr("disabled", 'true');;

}

	//alert($(this).val());


});

});



/*=====  End of DETECTO CUAL LI APRETE  ======*/





/*==============================================
=            DETECTO CUAL LI APRETE  OPCION           =
==============================================*/

$('body').on('click', '.contactos_opcion', function(event) {
	event.preventDefault();
$('#contactoSelect_opcion').html('');

	/* Act on the event */
$don = $(this).attr('data-nombre');
 
//alert(nombre);
 
$pasaporte = $(this).attr('data-documento');
$direccion = $(this).attr('data-direccion');
$tel = $(this).attr('data-tel');
$email = $(this).attr('data-email');
$fecha_contratacion= $(this).attr('data-fechacontratacion');





$('#contactoSelect').append('A nombre de:<input type="text" readonly value="'+$don+'" name="don" required class="form-control">');
$('#contactoSelect').append('Pasaporte:<input type="text" readonly value="'+$pasaporte+'" name="pasaporte" required class="form-control">');
$('#contactoSelect').append('Dirección:<input type="text" readonly value="'+$direccion+'" name="direccion" required class="form-control">');
$('#contactoSelect').append('Teléfono:<input type="text" readonly value="'+$tel+'" name="tel" required class="form-control">');
$('#contactoSelect').append('Email:<input type="text" readonly value="'+$email+'" name="email" required class="form-control">');
$('#contactoSelect').append('Fecha de Contratación:<input type="text" readonly value="'+$fecha_contratacion+'" name="fecha_contratacion" required class="form-control">');
$('.contactos').remove();
$('#contactoSelect input').each(function(index, el) {
	
var i = 0;
	if ($(this).val()=='') {

alert('El dato "'+ $(this).attr('name')+ '" esta en blanco, complete para continuar');
 i++;
	}


if (i==0) {

	$('#paso2').removeAttr("disabled");
}
else {

$('#paso2').attr("disabled", 'true');;

}

	//alert($(this).val());


});

});



/*=====  End of DETECTO CUAL LI APRETE  ======*/




/*==============================================
=            DETECTO CUAL LI APRETE  OPCION           =
==============================================*/

$('body').on('click', '.fichasli', function(event) {
	event.preventDefault();
$('#contactoSelect_opcion').html('');

	/* Act on the event */

 

$sector = $(this).attr('data-sector');
$refOpcion= $(this).attr('data-id')+' '+$(this).attr('data-opcion');
$total= $(this).attr('data-inversion');
$importe = '20';
$iva= '10';



$('#contactoSelect_opcion').append('Sector:<input type="text" readonly value="'+$sector+'" name="sector" required class="form-control">');

$('#contactoSelect_opcion').append('Refº Opción:<input type="text" readonly value="'+$refOpcion+'" name="refOpcion" required class="form-control">');

$('#contactoSelect_opcion').append('Inversión:<input type="text" readonly value="'+$total+'" name="total" required class="form-control">');

$('.fichasli').remove();


$('#contactoSelect_opcion input').each(function(index, el) {
	
var ii = 0;
	if ($(this).val()=='') {

alert('El dato "'+ $(this).attr('name')+ '" esta en blanco, complete para continuar');
 i++;
	}


if (ii==0) {

	$('#paso2').removeAttr("disabled");
}
else {

$('#paso2').attr("disabled", 'true');;

}

	//alert($(this).val());


});

});

$(document).ready(function() {
	



$('#contrato').on('change',  function(event) {
	event.preventDefault();



	contrato = $(this).val();

	if (contrato!= '') {
		$('#paso3').removeAttr("disabled");
	}
	else {

$('#paso3').attr("disabled", 'true');;

	}



if (contrato == 'DUE DILLIGENCE') {

 

$('#descargar').attr('href', 'demo_sys.php?contrato='+contrato+'&don='+$don+'&pasaporte='+$pasaporte+'&direccion='+$direccion+'&tel='+$tel+'&email='+$email+'&fecha_contratacion='+$fecha_contratacion+'&sector='+$sector+'&refOpcion='+$refOpcion+'&total='+$total+'&nacionalidad='+$nacionalidad+'                  ');


}
	/* Act on the event */
});





 

});



/*=====  End of DETECTO CUAL LI APRETE  ======*/

 </script>

</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>