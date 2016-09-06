<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contacto</title>

		<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
		
	<link rel="stylesheet" href="../assets/sweetalert/sweetalert-master/dist/sweetalert.css">


		<link rel="stylesheet" href="../assets/css/select2.min.css">
	
        
       	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="../assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="../assets/font-awesome-4.4.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css"> 
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<header id="header">
		
<img  class="img-responsive" src="images/header.png">

	</header>


<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://cohenyaguirre.es">Cohen & Aguirre</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">

					<li><a href="#"><i class="fa fa-home"></i> ir al home</a></li>
				 
					<li class="active"><a href="#">Contacto</a></li>
				
				</ul>
			 
			 
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
		 
	<div class="container-fluid">
	<center>
	<img class="img-responsive" src="images/img1.png">
	</center>
	</div>
<br>

<div class="container-fluid">
	<center>
	<h2>¿Tienes 5 minutos?</h2>
	<a href="http://www.cohenyaguirre.es/s/cc_images/teaserbox_40038076.png?t=1464262903"><img src="images/whatapp.png" alt=""></a>
	

	<h3>
		
<p>WHATSAPP: <strong> +34 608 612 964</strong> </p>
<p>De 10.00hrs - 14.00hrs y de 16.00hrs a 20.00hrs</p>
<p>En horario de Madrid</p>

	</h3>
	<h2>Queremos hablar contigo:</h2>
	</center>
	</div>

<!--==========================================================================================
=            AREA DONDE VA EL FORMULARIO PRINCIPAL ESTE ES EL CUERPO DE LA PAGINA            =
===========================================================================================-->

<!-- Page Wrap -->
	<div class="pageWrap">

		<!-- Page content -->
	<div class="container" style="w">
					
					<form id="formulario">

		
						<div class="row">
							



						
						
							
							
							
							
								
								
									<div class="col-xs-12 col-sm-4">
																<div class="form-group">
																	<label for="basicInput">Nombres:</label>
											<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['nombres'] ?>" required class="form-control" name="nombres" id="nombres" placeholder="Nombres:">
																</div>
															</div>
								

								
									<div class="col-xs-12 col-sm-4">
																<div class="form-group">
																	<label for="basicInput">Apellidos:</label>
											<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['apellidos'] ?>" required class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos:">
																</div>
															</div>



															<div class="row customSelectWrap">
							<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>País</label>
									<select name="pais" class="js-select error">
										<option disabled selected>- Select país -</option>
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
									<input type="email" value="<?php echo $ficha['ficha_contacto'][0]['email'] ?>" required class="form-control" name="email" id="email" placeholder="E-mail:">
														</div>
													</div>


													<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="basicInput">Teléfono móvil:</label>
			<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['movil'] ?>" required class="form-control" name="movil" id="movil" placeholder="Teléfono móvil:">
								</div>
							</div>

						
</div>

	<hr />
					<h2 class="boxHeadline">Pre información</h2>
					<h3 class="boxHeadlineSub"></h3>

			
						<!-- Checkboxes -->
						<div class="row checkboxes">
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="pre_informacion[]" value="SOY CIUDADANO EUROPEO" type="checkbox">
									<span>Soy ciudadano europeo</span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<label>
								<input  name="pre_informacion[]" value="PRETENDO EMIGRAR" type="checkbox">
									<span>Pretendo emigrar</span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="pre_informacion[]" value="NO SE CUANDO PODRE EMIGRAR" type="checkbox">
									<span>No sé cuándo podre emigrar</span>
								</label>
							</div>
						</div>
						<div class="row checkboxes">
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="pre_informacion[]" value="YA HE VENDIDO MIS PROPIEDADES" type="checkbox">
									<span>Ya he vendido mis propiedades</span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="pre_informacion[]"  value="ESTOY EN PROCESO DE VENTA DE MIS PROPIEDADES" type="checkbox">
									<span>Estoy en proceso de venta de mis propiedades</span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								
							</div>
						</div>
						<div class="row checkboxes">
							<div class="col-xs-12 col-sm-4 col-sm-offset-4 i">
							 
							</div>
							<div class="col-xs-12 col-sm-4 i">
								
							</div>
						</div>


						<!-- Break -->
						<hr />

			


						 
						
						

						<!-- Textarea -->
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<div class="form-group">
									<label  for="textarea1">¿Por qué escoge España como destino?</label>
									<textarea required  id="por_que_escoge_destino_españa"  name="porque_espana" class="form-control" rows="8"></textarea>
								</div>
							</div>
						
						</div>

						<hr />
						

						<div class="row">
							



	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">¿Cuál es su presupuesto para inversión?</label>
			<input type="number" value="<?php echo $ficha['ficha_contacto'][0]['presupuesto_a_invertir'] ?>" required class="form-control" name="inversion" id="presupuesto_a_invertir" placeholder="¿Cuál es su presupuesto para inversión?">
								</div>
							</div>



						</div>
		<hr />
						<div class="row">
							
	<div class="row checkboxes">
							
<div class="alert alert-warning">
	
	<strong>Nota importante!</strong> Entendiendo que el mínimo propuesto de inversión es 50.000€ 
</div>
							<div class="col-xs-12 col-sm-12 i">
								<label>
									<input value="SOY CIUDADANO EUROPEO" name="entiendo" value="SI" required type="checkbox">
									<span>

									Entendiendo!



									</span>
								</label>
							</div>
							</div>

						</div>
						<hr>
<center>

<input type="reset" value="Reset" class="btn btn-default">
						<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-danger">Enviar formulario <i class="fa fa-send"></i></button>
						</center>
					</form>
			</div>	
	
 </div>	<!-- Page Wrap -->

<!--====  End of AREA DONDE VA EL FORMULARIO PRINCIPAL ESTE ES EL CUERPO DE LA PAGINA  ====-->

<div class="container"><center>
	
	<h3>Pide tu cita para visitarnos:</h3>
</center>

<div>
<h3>
<br>Cohen & Aguirre Lobby Solutions
<br>Calle del Cid, número 3, planta 1, puerta Derecha.
<br>28001, Madrid. España.
<br>+34 914361333

</h3>
</div>
</div>


<div class="container-fluid">
	<center>
	<img class="img-responsive" src="images/img2.jpg">
	</center>
	</div>


<div class="container">
	<center>	<h2>Links de interés</h2>
<div id="owl-example" class="owl-carousel">



<div><a target="_blank" href="http://www.rtve.es/"> <img src="images/referencias/imagen1.png"></a> </div>
<div><a target="_blank" href="http://elvenezolanotv.es/evtv/"> <img src="images/referencias/imagen2.jpg"></a> </div>
<div><a target="_blank" href="http://www.expansion.com/"> <img src="images/referencias/imagen3.jpg"></a> </div>
<div><a target="_blank" href="http://sambiloutlet.es/es/index.php"> <img src="images/referencias/imagen4.png"></a> </div>
<div><a target="_blank" href="http://www.ie.edu/es/business-school/"> <img src="images/referencias/imagen5.png"></a> </div>

<div><a target="_blank" href="http://www.clubfinancierogenova.com/"> <img src="images/referencias/imagen7.png"></a> </div>
<div><a target="_blank" href="https://www.abanca.com/es/"> <img src="images/referencias/imagen8.png"></a> </div>
<div><a target="_blank" href="http://www.telecinco.es/endirecto/"> <img src="images/referencias/imagen9.png"></a> </div>
<div><a target="_blank" href="http://restaurantetenconten.com/"> <img src="images/referencias/imagen10.png"></a> </div>
<div><a target="_blank" href="http://www.mineco.gob.es/portal/site/mineco/"> <img src="images/referencias/imagen11.jpg"></a> </div>
 

</div>
</center>
</div>


<div class="container" id="txt1" >
	<center>

		
		<p>En cumplimiento de la Ley Orgánica 15/1999, de 13 de diciembre de Protección de Datos de Carácter Personal (LOPD), Iberoamericana Brokers Consulting SL, como responsable del fichero informa de las siguientes consideraciones:</p>

<p>Los datos de carácter personal que le solicitamos, quedarán incorporados a un fichero cuya finalidad es estudiar sus posibilidades de inversión en territorio español. Los campos marcados con asterisco son de cumplimentación obligatoria, siendo imposible realizar la finalidad expresada si no aporta esos datos.
Las condiciones generales de contratación serán recogidas en el apartado legal.</p>

<p>Queda igualmente informado de la posibilidad de ejercitar los derechos de acceso, rectificación, cancelación y oposición, de sus datos personales en Calle Velázquez 27, 1º izquierda, 28001 Madrid, España.	</p>
	</center>
</div>

<footer id="footer">
	
<div id="contentfooter" class="container-fluid">
    <div class="leftrow">
                        <a rel="nofollow" href="javascript:window.print();">
                    <img class="inline" height="14" width="18" src="//cdn.website-start.de/s/img/cc/printer.gif" alt="Versión para imprimir">
                    Versión para imprimir                </a> <span class="footer-separator">|</span>
                <a href="http://www.cohenyaguirre.es/sitemap/">Mapa del sitio</a>
                        <br> IBEROAMERICANA BROKERS CONSULTING SL. CIF: B87209615. Dirección: Calle Velázquez, 27, 1º Izquierda. 28001, Madrid,España. Teléfono: +34 914361333. Todos los derechos reservados. Apartado Legal y
Derechos consolidados. Más información: info@cohenyaguirre.es.
            </div>
  
 
</div>

</footer>

		<!-- JS -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
			<script src="../assets/js/select2.min.js"></script>
		
		 
		 <script src="../assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js" type="text/javascript"></script>



		<script type="text/javascript">
			$(document).ready(function() {



$(".js-select").length&&$("select.js-select").select2({minimumResultsForSearch:1/0}),$(".js-select2").length&&$("select.js-select2").select2();

$(".js-select select").select2({minimumResultsForSearch:1/0});
 
  $("#owl-example").owlCarousel({

  	autoPlay:true
  });



$('#formulario').on('submit',  function(event) {
	event.preventDefault();
	/* Act on the event */
$('#boton').button('loading');

$.ajax({
	url: 'guardar.php',
	type: 'POST',

	data: $('#formulario').serialize(),
})
.done(function(data) {
	console.log("success");
	console.log(data);
if (data== 'true') {

swal({ 
  title: "Gracias por contactarnos!",
   text: "Su formulario a sido enviado!",
    type: "success" 
  },
  function(){
   location.reload();
   // window.location.href = 'login.html';
});


}

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
	$('#boton').button('reset');
});


});

 
});

		</script>
	</body>
</html>