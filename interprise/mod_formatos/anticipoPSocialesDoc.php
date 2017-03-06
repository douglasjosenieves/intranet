<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
<style type="text/css">
	
	body {

font-size: 11px;
text-align: justify;

	}
.titulo {

	font-size: 14px;
	font-weight: 800;
	margin: 1px;
}


.titulo p {

	 
	margin: 1px;
}
.titulo2 p {

	 
	margin: 1px;
}

.titulo2 {

	font-size: 18px;
	font-weight: 800;
		margin: 1px;
}
hr {
	    height: 6px;
    background-color: #dcdcdc;
    position: relative;
     
    top: 60px;
    z-index: -50;
    border: none;
}

#firma {



}

 
</style>

  <style>
     @page { margin: 180px 50px; }
     #header { position: fixed; left: 0px; top: -150px; right: 0px; height: 150px;  text-align: center; }
     #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px;   }
     #footer .page:after { content: counter(page, upper-roman); }
   </style>
</head>
<body>
 
  <div id="header">
     <hr>
<!-- <img src="images/logo-light.png"> -->
   </div>
   <div id="footer">
     <p class="page">Pagina <?php $PAGE_NUM ?></p>
    <!-- <hr style="background-color: #a21414;
    top: 1px;">
     <center>
     <p style="font-size: 9;font-weight: 800;">Contacto: 0034 91 436 13 33 Cohen y Aguirre Lobby Solutions. Madrid, España. 2014. Para rectificación de datos, contactad a info@cohenyaguirre.es / Velázquez 27, Planta 1, puerta Izquierda. Madrid, España.</p> -->
</center>
   </div>


<div class="titulo">
<center>
<!-- <p><strong>Cohen</strong> <strong>y Aguirre Lobby Solutions</strong></p> -->
<div class="titulo2">
<p><strong>Anticipo de prestaciones sociales</strong></p>
</div>
</center>
</div>
<p>Caracas, <?php  echo $hoy; ?></p>
<p>Se&ntilde;ores:</p>
<p><strong>Direcci&oacute;n de Talento Humano.</strong></p>
<p><strong>Cohen y Aguirre Lobby Solutions C.A.</strong></p>
<p>Presente.-</p>

<p>Mediante la presente y dando cumplimiento al <strong>Art&iacute;culo 144</strong> de la <strong>LOTTT </strong>que cito:</p>
<p>&nbsp;&ldquo;El trabajador o trabajadora tendr&aacute; derecho al anticipo hasta de un setenta y cinco (75%) de lo depositado como garant&iacute;a de sus prestaciones sociales, para satisfacer obligaciones derivadas de:&nbsp;</p>
<ol>
<li>a) La construcci&oacute;n, adquisici&oacute;n, mejora o reparaci&oacute;n de vivienda para &eacute;l y su familia;</li>
<li>b) La liberaci&oacute;n de hipoteca o de cualquier otro gravamen sobre vivienda de su propiedad;</li>
<li>c) La inversi&oacute;n en educaci&oacute;n para &eacute;l, ella o su familia; y</li>
<li>d) Los gastos por atenci&oacute;n m&eacute;dica y hospitalaria para &eacute;l ella y su familia &ldquo;</li>
</ol>
<p>&nbsp;</p>
<p>Me dirijo a ustedes, en la oportunidad de solicitarles un <strong>Adelanto de mis Prestaciones Sociales</strong> por la cantidad de ( Bs. <?php echo  $monto ?>), <?php echo  $monto_texto ?></p>
<p>&nbsp;</p>
<p>El Objeto de esta solicitud obedece a: <strong><?php  echo $objeto ?></strong></p>
<p>&nbsp;</p>
<p>Sin m&aacute;s a que hacerles&nbsp; referencia y agradeciendo&nbsp; su valiosa colaboraci&oacute;n al respecto, quedo de ustedes.</p>
<p>&nbsp;</p>
<p>Atentamente,</p>
<br>
<br>
<p>________________________</p>

<p>Firma del Trabajado</p>
<p>Nombre y Apellido:&nbsp;<?php  echo ucfirst($username)   ?></p>
<p>C&eacute;dula n&deg;:<?php  echo $cedula  ?></p>
<p>Cargo: <?php  echo ucfirst($cargo)   ?></p>




</div>
</body>
</html>