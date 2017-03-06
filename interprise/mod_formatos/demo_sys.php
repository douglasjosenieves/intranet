<?php session_start(); 
require_once '../../vendor/autoload.php';	

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();



extract($_REQUEST);
$date = new DateTime($fecha_contratacion);


/*$don= 'Douglas Nieves';
$pasaporte = '000000002132415';
$direccion = 'Guatire PArque Alto';
$tel = '04141331946';
$email = 'douglasjosenieves@gmail.com';
$fecha_contratacion= '2017-02-01';
/*$sector = 'Restauración';
$refOpcion= '0001 Restaurant';*/

/*$importe = '20';
$iva= '10';*/
/*$total='30';*/

if ($nacionalidad=='EUROPEO') {


	switch($total)
    {
    case ($total >= 0 and $total <= 40000):
    $porcentaje_aplicado = "3";
    break;

    case ($total >= 40001 and $total <= 55000):
    $porcentaje_aplicado = "3";
    break;

   case ($total >= 55001 and $total <= 75000):
    $porcentaje_aplicado = "2";
    break;

      case ($total >= 75001 and $total <= 100000):
    $porcentaje_aplicado = "1";
    break;

       case ($total >= 100001 and $total <= 200000):
    $porcentaje_aplicado = "2";
    break;

       case ($total >= 200001 and $total <= 300000):
    $porcentaje_aplicado = "1.5";
    break;

       case ($total >= 300001 and $total <= 400000):
    $porcentaje_aplicado = "1.5";
    break;

    case ($total >= 400001 and $total <= 500000):
    $porcentaje_aplicado = "1";
    break;

    case ($total >= 500001):
    $porcentaje_aplicado = "1";
    break;

   
    }

} else {

switch($total)
    {
    case ($total >= 0 and $total <= 40000):
    $porcentaje_aplicado = "3";
    break;

    case ($total >= 40001 and $total <= 100000):
    $porcentaje_aplicado = "3";
    break;

   case ($total >= 100001 and $total <= 200000):
    $porcentaje_aplicado = "2";
    break;

      case ($total >= 200001 and $total <= 300000):
    $porcentaje_aplicado = "1.5";
    break;

       case ($total >= 300001 and $total <= 400000):
    $porcentaje_aplicado = "1.5";
    break;

       case ($total >= 400001 and $total <= 500000):
    $porcentaje_aplicado = "1";
    break;


    case ($total >= 500001):
    $porcentaje_aplicado = "1";
    break;

   
    }

	
}
  
function round_up($number, $precision = 3)
{
    $fig = (int) str_pad('1', $precision, '0');
    return (ceil($number * $fig) / $fig);
}


$importe = round_up($total * $porcentaje_aplicado /100);;
$iva= round_up($importe*21/100);

$total = round_up($importe + $iva);



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
$hoys = date("Y-m-d H:i:s");   
// Output the generated PDF to Browser
$dompdf->stream('due dilligence-'.$hoys.'.pdf');




setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Puerto_Rico');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('due_dilligence_create');
$log->pushHandler(new StreamHandler('../logs/mod_documentos.log', Logger::NOTICE));
$username =  $_SESSION['usuario']['Nombre'].' '. $_SESSION['usuario']['Apellido'];
$ip=$_SERVER['REMOTE_ADDR'];
// add records to the log
$log->notice('Due Dilligence Create '.$don.' '.$refOpcion, array('userid' => $user, 'userneme' => $username,'ip' => $ip));
 
		

 ?>