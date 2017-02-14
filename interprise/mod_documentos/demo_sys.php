<?php 
require_once '../../vendor/autoload.php';	

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$don= 'Douglas Nieves';
$pasaporte = '000000002132415';
$direccion = 'Guatire PArque Alto';
$tel = '04141331946';
$email = 'douglasjosenieves@gmail.com';
$fecha_contratacion= '2017-02-01';
$date = new DateTime($fecha_contratacion);




$sector = 'Restauración';
$refOpcion= '0001 Restaurant';

$importe = '20';
$iva= '10';
$total='30';
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$hoy =  $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

$fechac= $dias[$date->format("w")]." ".$date->format("d")." de ".$meses[$date->format("n")-1]. " del ".$date->format("Y") ;
//Salida: Viernes 24 de Febrero del 2012
ob_start();
$monto = '1.000.000';
require_once 'demo.php';
$documento = ob_get_clean();
$dompdf->loadHtml($documento);

  

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('demo.pdf');

		

 ?>