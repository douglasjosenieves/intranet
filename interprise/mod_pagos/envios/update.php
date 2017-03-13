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
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);


 
 



$qry = "UPDATE `".TABLA."`
SET

`primer_nombre` = '$primer_nombre',
`segundo_nombre` = '$segundo_nombre',
`primer_apellido` = '$primer_apellido',
`segundo_apellido` = '$segundo_apellido',
`numero_cedula` = '$numero_cedula',
`estado_civil` = '$estado_civil',
`fecha_nacimiento` = '$fecha_nacimiento',
`fecha_ingreso` = '$fecha_ingreso',
`domicilio` = '$domicilio',
`email_personal` = '$email_personal',
`rif` = '$rif',
`direccion_fiscal` = '$direccion_fiscal',
`cargo` = '$cargo',
`salario` = '$salario',
`acumulado_pss` = '$acumulado_pss',
`disponible_75` = '$disponible_75',
`interes_acumulado` = '$interes_acumulado',
`adelanto_pss` = '$adelanto_pss',
`adelanto_interes_sobre_pss` = '$adelanto_interes_sobre_pss',
`sede` = '$sede',
`banco` = '$banco',
`numero_cuenta` = '$numero_cuenta',
`telefono_movil` = '$telefono_movil',
`telefono_fijo` = '$telefono_fijo',
`persona_contacto_emergencia` = '$persona_contacto_emergencia',
`telefono_emergencia` = '$telefono_emergencia',
`tipo_sagre` = '$tipo_sagre',
`nucleo_familiar` = '$nucleo_familiar',
`usuario_id` = '$usuario_id',
`hand_id` = '$hand_id',
 
`editado_por` = '$editado_por',
`editado_fecha` = '$editado_fecha',
`imagenes` = '$imagenes',
`ip` = '$ip',
`anulado` = '$anulado',
`ext1` = '$ext1',
`ext2` = '$ext2',
`ext3` = '$ext3',
`ext4` = '$ext4',
`ext5` = '$ext5'
WHERE `id` = '$referencia';
";
 

$resul = mysql_query($qry);








 

if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}


  
   
 





?>