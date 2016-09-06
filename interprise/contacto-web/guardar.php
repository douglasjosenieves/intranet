<?php   
//error_reporting(0);
//header('Content-type: application/json');
/*
 * Following code will list all the products
 */
 
// array for JSON response

 
// include db connect class




require_once __DIR__ . '../../../db_connect.php';
//sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fechaphp = date("Y-m-d H:i:s");


 
 
$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$pais=$_POST['pais'];
$email=$_POST['email'];
$movil=$_POST['movil'];
$pre_informacion=$_POST['pre_informacion'];
$porque_espana=$_POST['porque_espana'];
$inversion=$_POST['inversion'];
$status=$_POST['status'];
$tramitido_al_crm=$_POST['tramitido_al_crm'];
$fecha=$_POST['fecha'];
$ip=$_POST['ip'];
$anulado=$_POST['anulado'];

$pre_informacion = serialize($pre_informacion);
$fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];

$resul = mysql_query("INSERT INTO `contactos_web` (

`id`,
`nombres`,
`apellidos`,
`pais`,
`email`,
`movil`,
`pre_informacion`,
`porque_espana`,
`inversion`,
`status`,
`tramitido_al_crm`,
`fecha`,
`ip`,
`elaborado_por`,
`anulado`


) VALUES ( 
  '$id',
 '$nombres',
 '$apellidos',
 '$pais',
 '$email',
 '$movil',
 '$pre_informacion',
 '$porque_espana',
 '$inversion',
 '$status',
 '$tramitido_al_crm',
 '$fecha',
 '$ip',
 'website',
 '$anulado'


);");


//echo $resul;

$mivar  = unserialize($pre_informacion );

foreach ($mivar as $value) {
	$pre_in .= $value.'   -   ';
}






 

if ($resul==1) {
  
echo 'true';


 define("EMAILADMIN", "info@cohenyaguirre.tk");
  define("EMAIREPLY", "info@cohenyaguirre.es");
 define("EMAILUSUARIO", $email);
 define("NOMBRE", $nombres.' '.$apellidos);
 define('DE', 'Cohen & Aguirre');
 
$asunto = 'Gracias por escribirnos';
 
$cabeceras = "From: ".DE." <".EMAILADMIN.">\r\n";
$cabeceras .= "Reply-To: ".EMAIREPLY."\r\n";
 
$cabeceras .= "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
 

$mensaje = '<html><body>';

$mensaje .= '<h1> <em> <strong> Cohen & A<span style="color:red">g</span>uirre</strong></em></h1>';
$mensaje .= '<h2>www.cohenyaguirre.es (Formulario Web)</h2>';
$mensaje .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$mensaje .= "<tr style='background: #eee;'><td><strong>Nombre del contacto:</strong> </td><td>" . NOMBRE . "</td></tr>";
$mensaje .= "<tr><td><strong>Email:</strong> </td><td>" . EMAILUSUARIO . "</td></tr>";
$mensaje .= "<tr><td><strong>Movil:</strong> </td><td>" . $movil. "</td></tr>";
$mensaje .= "<tr><td><strong>Pre información:</strong> </td><td>" . $pre_in . "</td></tr>";
$mensaje .= "<tr><td><strong>Porque quiere invertir en españa:</strong> </td><td>" . $porque_espana . "</td></tr>";
$mensaje .= "<tr><td><strong>Inversion:</strong> </td><td>" . $inversion . "</td></tr>";
$mensaje .= "<tr><td><strong>Fecha:</strong> </td><td>" . $fecha. "</td></tr>";
$mensaje .= "<tr><td><strong>Pais:</strong> </td><td>" . $pais. "</td></tr>";
$mensaje .= "<tr><td><strong>Dirección Ip:</strong> </td><td>" . $ip. "</td></tr>";

$mensaje .= "</table>";

$mensaje .= "<br> <br>";
$mensaje .= "Estimado(a) " . $nombres. " pronto serás atendido por uno de nuestros asesores! Gracias por escribirnos. <p>Quedamos a su total disposición.</p><p><em> <strong> Cohen & A<span style='color:red'>g</span>uirre</strong></em></p>";

$mensaje .= "<pre>
Teléfonos: 212 905 63 04 / 6402 / 6343
Teléfonos móvil:0058 414 133 19 46
Dirección: Avenida Francisco de Miranda. C.C Lido, Torre D. Piso 4 Oficina 41-D
www.cohenyaguirre.es
La información contenida en este mensaje y en cualquier archivo o documento que se adjunte al mismo es confidencial y privilegiada.
Está dirigida exclusivamente para el uso privado del destinatario y no debe ser diseminada o utilizada por otra persona.
Si usted recibe esta transmisión por error, favor notifique inmediatamente al remitente por esta misma vía y destruya la transmisión original y sus adjuntos.
La compañía no garantiza la transmisión de mensajes electrónicos en forma segura y libre de errores debido a que la información puede ser interceptada, dañada, perdida, destruida, pueda llegar tarde, incompleta, o conteniendo virus.
La compañía no acepta responsabilidad por cualquier error u omisión en el contenido de este mensaje, que puede surgir como resultado de la transmisión de este mensaje electrónico.
Los empleados y usuarios del sistema de mensaje electrónico están expresamente notificados de no crear y enviar enunciados difamatorios; no deben infringir o autorizar ninguna violación a los derechos de autor u otras disposiciones legales, a través de comunicaciones por mensaje electrónico.
Cualquier comunicado de esta naturaleza es contrario a la política de la compañía. La compañía no acepta ninguna responsabilidad con respecto a este tipo de comunicación. Gracias.
<pre> ";
$mensaje .= "</body></html>";






 
 
 @mail(EMAILUSUARIO, $asunto, $mensaje, $cabeceras );

/////////////////////////////////////////////////////////

 $asunto = 'Nuevo Contacto';
 
$cabeceras = "From: ".DE." <".EMAILADMIN.">\r\n";
$cabeceras .= "Reply-To: ".EMAIREPLY."\r\n";
 
$cabeceras .= "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
 

$mensaje = '<html><body>';

$mensaje .= '<h1> <em> <strong> Cohen & A<span style="color:red">g</span>uirre</strong></em></h1>';
$mensaje .= '<h2>www.cohenyaguirre.es (Formulario Web)</h2>';
$mensaje .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$mensaje .= "<tr style='background: #eee;'><td><strong>Nombre del contacto:</strong> </td><td>" . NOMBRE . "</td></tr>";
$mensaje .= "<tr><td><strong>Email:</strong> </td><td>" . EMAILUSUARIO . "</td></tr>";
$mensaje .= "<tr><td><strong>Movil:</strong> </td><td>" . $movil. "</td></tr>";
$mensaje .= "<tr><td><strong>Pre información:</strong> </td><td>" . $pre_in . "</td></tr>";
$mensaje .= "<tr><td><strong>Porque quiere invertir en españa:</strong> </td><td>" . $porque_espana . "</td></tr>";
$mensaje .= "<tr><td><strong>Inversion:</strong> </td><td>" . $inversion . "</td></tr>";
$mensaje .= "<tr><td><strong>Fecha:</strong> </td><td>" . $fecha. "</td></tr>";
$mensaje .= "<tr><td><strong>Pais:</strong> </td><td>" . $pais. "</td></tr>";
$mensaje .= "<tr><td><strong>Dirección Ip:</strong> </td><td>" . $ip. "</td></tr>";

$mensaje .= "</table>";
$mensaje .= "<br> <br>";
$mensaje .= "Estimado(a) " . $nombres. " pronto serás atendido por uno de nuestros asesores! Gracias por escribirnos. <p>Quedamos a su total disposición.</p><p><em> <strong> Cohen & A<span style='color:red'>g</span>uirre</strong></em></p>";

$mensaje .= "<pre>
Teléfonos: 212 905 63 04 / 6402 / 6343
Teléfonos móvil:0058 414 133 19 46
Dirección: Avenida Francisco de Miranda. C.C Lido, Torre D. Piso 4 Oficina 41-D
www.cohenyaguirre.es
La información contenida en este mensaje y en cualquier archivo o documento que se adjunte al mismo es confidencial y privilegiada.
Está dirigida exclusivamente para el uso privado del destinatario y no debe ser diseminada o utilizada por otra persona.
Si usted recibe esta transmisión por error, favor notifique inmediatamente al remitente por esta misma vía y destruya la transmisión original y sus adjuntos.
La compañía no garantiza la transmisión de mensajes electrónicos en forma segura y libre de errores debido a que la información puede ser interceptada, dañada, perdida, destruida, pueda llegar tarde, incompleta, o conteniendo virus.
La compañía no acepta responsabilidad por cualquier error u omisión en el contenido de este mensaje, que puede surgir como resultado de la transmisión de este mensaje electrónico.
Los empleados y usuarios del sistema de mensaje electrónico están expresamente notificados de no crear y enviar enunciados difamatorios; no deben infringir o autorizar ninguna violación a los derechos de autor u otras disposiciones legales, a través de comunicaciones por mensaje electrónico.
Cualquier comunicado de esta naturaleza es contrario a la política de la compañía. La compañía no acepta ninguna responsabilidad con respecto a este tipo de comunicación. Gracias.
<pre> ";
$mensaje .= "</body></html>";
 
 
 @mail(EMAILADMIN, $asunto, $mensaje, $cabeceras );



}

else
{
echo 'false';


}

  
   die;
 




?>