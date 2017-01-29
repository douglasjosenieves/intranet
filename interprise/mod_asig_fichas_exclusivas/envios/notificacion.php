

<?php 


require('../../envios/notiEmail/PHPMailer-master/PHPMailerAutoload.php');

 
 
$nombrecompleto =  ucwords($nombres.' '.$apellidos);


 

$mail = new PHPMailer();

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
echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
//echo 'Message sent!';

/*====================================================================
=            Aqui va el inser del mensaje en seguimientos            =
====================================================================*/
$categoria='ASIGNACION FICHA EXCLUSIVA';
$status='CERRADO';
$asunto= $mail->Subject;
$descripcion=$body;
$fecha = date("Y-m-d H:i:s");


$qry = "INSERT INTO `seguimiento` ( `id_contacto`, `nombres`, `apellidos`, `asunto`, `descripcion`, `categoria`, `status`, `tramitido_al_crm`, `fecha`, `elaborado_por`) 


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


//$resul = mysql_query($qry);

//echo $qry;

//echo $resul ;

/*=====  End of Aqui va el inser del mensaje en seguimientos  ======*/

}






?>
