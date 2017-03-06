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


  
function round_up($number, $precision = 3)
{
    $fig = (int) str_pad('1', $precision, '0');
    return (ceil($number * $fig) / $fig);
}


 
$username =  $_SESSION['usuario']['Nombre'].' '. $_SESSION['usuario']['Apellido'];
$cargo =  $_SESSION['usuario']['Cargo'];


$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$hoy =  $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

 
//Salida: Viernes 24 de Febrero del 2012
ob_start();

require_once 'anticipoPSocialesDoc.php';
$documento = ob_get_clean();
$dompdf->loadHtml($documento);

  

// Render the HTML as PDF
$dompdf->render();
$hoys = date("Y-m-d H:i:s");   
// Output the generated PDF to Browser
$dompdf->stream('anticipo-prestaciones-sociles-'.$hoys.'.pdf');




setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Puerto_Rico');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('anticipo');
$log->pushHandler(new StreamHandler('../logs/mod_documentos.log', Logger::NOTICE));
$username =  $_SESSION['usuario']['Nombre'].' '. $_SESSION['usuario']['Apellido'];
$ip=$_SERVER['REMOTE_ADDR'];
// add records to the log
$log->notice('Formato anticipo', array('userid' => $user, 'userneme' => $username,'ip' => $ip));
 
		

 ?>