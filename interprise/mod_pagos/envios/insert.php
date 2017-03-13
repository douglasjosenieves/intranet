<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
require_once __DIR__ . '../../../../db_connect.php';
//sleep(2);
 require_once '../config.php';
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   
setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Puerto_Rico');
$fecha = date("Y-m-d H:i:s");
$editado_fecha = date("Y-m-d H:i:s");
$elaborado_fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);


 $clavemd5 = md5($clave);
 



$qry = "INSERT INTO `".TABLA."`
(`id`,
`primer_nombre`,
`segundo_nombre`,
`primer_apellido`,
`segundo_apellido`,
`numero_cedula`,
`estado_civil`,
`fecha_nacimiento`,
`fecha_ingreso`,
`domicilio`,
`email_personal`,
`rif`,
`direccion_fiscal`,
`cargo`,
`salario`,
`acumulado_pss`,
`disponible_75`,
`interes_acumulado`,
`adelanto_pss`,
`adelanto_interes_sobre_pss`,
`sede`,
`banco`,
`numero_cuenta`,
`telefono_movil`,
`telefono_fijo`,
`persona_contacto_emergencia`,
`telefono_emergencia`,
`tipo_sagre`,
`nucleo_familiar`,
`usuario_id`,
`hand_id`,
`elaborado_por`,
`elaborado_fecha`,
`editado_por`,
`editado_fecha`,
`imagenes`,
`ip`,
`anulado`,
`ext1`,
`ext2`,
`ext3`,
`ext4`,
`ext5`)
VALUES
('$id',
'$primer_nombre',
'$segundo_nombre',
'$primer_apellido',
'$segundo_apellido',
'$numero_cedula',
'$estado_civil',
'$fecha_nacimiento',
'$fecha_ingreso',
'$domicilio',
'$email_personal',
'$rif',
'$direccion_fiscal',
'$cargo',
'$salario',
'$acumulado_pss',
'$disponible_75',
'$interes_acumulado',
'$adelanto_pss',
'$adelanto_interes_sobre_pss',
'$sede',
'$banco',
'$numero_cuenta',
'$telefono_movil',
'$telefono_fijo',
'$persona_contacto_emergencia',
'$telefono_emergencia',
'$tipo_sagre',
'$nucleo_familiar',
'$usuario_id',
'$hand_id',
'$elaborado_por',
'$elaborado_fecha',
'$editado_por',
'$editado_fecha',
'$imagenes',
'$ip',
'$anulado',
'$ext1',
'$ext2',
'$ext3',
'$ext4',
'$ext5');

";
 

$resul = mysql_query($qry);
$id_asignado = mysql_insert_id();







 

if ($resul==1) {
  
echo $resul.'-'.$id_asignado;
}

else
{
echo 'false'.$qry;


}


  
   
 





?>