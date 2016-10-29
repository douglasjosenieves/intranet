<?php $fecha = date("Y-m-d H:i:s");
$editado_fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/New_York');
$anio=date("Y");
$mes=date("m");
$dia=date("d");
$hora=date("H");
$nuevafecha = strtotime ( '+1 hour' , strtotime ( $hora ) ) ;

echo $nuevafecha;
echo '<br>';
echo $hora;
echo '<br>';
echo $nuevafecha;
 ?>