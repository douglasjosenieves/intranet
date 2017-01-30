<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
require_once __DIR__ . '../../../../db_connect.php';
require_once 'config.php';
 require_once('../../envios/notiEmail/PHPMailer-master/PHPMailerAutoload.php');
$mail = new PHPMailer();
//sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d H:i:s");
$upd_fecha = date("Y-m-d H:i:s");
$ins_fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
//$pre_ = serialize($pre_);
extract ($_POST);




 $qry_delete = "DELETE FROM ".TABLA."  where id_opcion = '$referencia' and categoria = '$categoria'";
$resul = mysql_query($qry_delete);

 
 
 
 
if ($asignar!='') {
foreach ($asignar as $key => $value) {



$qry = "INSERT INTO  ".TABLA."
( 
`id_cliente`,
`id_opcion`,
`categoria`,
`anulado`)
VALUES
( 
'$value',
'$referencia',
'$categoria',
'$anulado');
";
$resul = mysql_query($qry);

}}



if ($notificar!='') {
foreach ($notificar as $key => $value) {
$data =  dameNombre($value);
$dato =   explode('|', $data);


$nombre =  $dato[0];
$email = $dato[1];
$nombres = $nombre;

$id_contacto=$value;

 
 
 
$nombrecompleto =  ucwords($nombre);


$body = 'Estimado (a): <strong>'.$nombrecompleto.'</strong>';
$body .= '<br>';
$body .= '<br>';
$body .= 'Ante todo reciba un cordial saludo,  A traves de este comunicado le informamos que se le ha otorgado una opción de negocio exclusiva. Recuerde para visualizar dicha opción debe acceder desde nuestra Internet http://cohenyaguirre.es/intranet/';
$body .= '<br>';
$body .= '<br>';


$body .= 'Saludos cordiales,';
 
$body .= '<br>';
$body .= '<br>';
$body .='<h3>Dirección de Atención al Cliente</h3>';
$body .='<p><a href="http://cohenyaguirre.es" target="_black">www.cohenyaguirre.es</a></p><p><img src="http://cohenyaguirre.tk/paginaweb/img/firma.jpg"></p>';


$mail->IsSMTP();

/* Sustituye (ServidorDeCorreoSMTP)  por el host de tu servidor de correo SMTP*/
$mail->Host = 'smtp.1and1.es';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';


/* Sustituye  ( CuentaDeEnvio )  por la cuenta desde la que deseas enviar por ejem. prueba@domitienda.com  */

$mail->From = 'contacto@cohenyaguirre.es';

$mail->FromName = 'Cohen y Aguirre';

$mail->Subject = 'Nueva ficha de Opciones exclusiva para usted!';

$mail->AltBody = 'Ficha exclusiva';
$mail->CharSet = 'UTF-8';
$mail->MsgHTML($body);


 
/* Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. admin@domitienda.com  */
$mail->AddAddress($email, $nombrecompleto);
/*$mail->AddBCC("info@cohenyaguirre.tk");
$mail->AddBCC("info@cohenyaguirre.es");
$mail->AddBCC("ruben.arismendi@cohenyaguirre.es");
$mail->addReplyTo('info@cohenyaguirre.es', 'Cohen y Aguirre');*/
$mail->SMTPAuth = true;

/* Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@domitienda.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta VxjjYi*/

$mail->Username = EMAIL_USER;
$mail->Password = EMAIL_PASS;

if(!$mail->Send()) {
//echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
// echo 'Mensaje enviado!';
/*====================================================================
=            Aqui va el inser del mensaje en seguimientos            =
====================================================================*/

$status='CERRADO';
$asunto= $mail->Subject;
$descripcion=$body;
$fecha = date("Y-m-d H:i:s");


$qry2 = "INSERT INTO `seguimiento` ( `id_contacto`, `nombres`, `apellidos`, `asunto`, `descripcion`, `categoria`, `status`, `tramitido_al_crm`, `fecha`, `elaborado_por`) 


VALUES (

'$id_contacto',
'$nombres',
'$apellidos',
'$asunto',
'$descripcion',
'$categoria',
'$status', 
'S',
'$fecha',
'$elaborado_por');";


$resul = mysql_query($qry2);






} //SI EL MENSAJE DIO POSITIVO



}}







 


 


 	


   


 







$id_asignado = mysql_insert_id();

if ($resul==1) {
  
echo $resul.'-'.$id_asignado;
}

else
{
 echo 'false'.$qry;


}




  
   die;
 



function dameNombre($id)
{
 
require_once __DIR__ . '../../../../db_connect.php';


$resul =  mysql_query("SELECT * FROM `contactos_web` where id = $id");
$usuario = array();
while($row =  mysql_fetch_array($resul) ) {
$usuario[] = $row;# code...
}

$userNombre = $usuario[0]['nombres'].' '.$usuario[0]['apellidos'];
$email = $usuario[0]['email'];

$user =  strtoupper($userNombre);
 
return $userNombre.'|'.$email;
}

?>