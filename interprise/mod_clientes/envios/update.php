<?php  session_start(); 

require_once '../../../vendor/autoload.php';	 
//error_reporting(0);
//header('Content-type: application/json');
/*
 * Following code will list all the products
 */
 
// array for JSON response

 
// include db connect class




require_once __DIR__ . '../../../../db_connect.php';
//sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fechaphp = date("Y-m-d H:i:s");


 $referencia=$_REQUEST['referencia'];
$id=$_REQUEST['id'];
$nombres=$_REQUEST['nombres'];
$apellidos=$_REQUEST['apellidos'];
$pais=$_REQUEST['pais'];
$email=$_REQUEST['email'];
$movil=$_REQUEST['movil'];
$pre_informacion=$_REQUEST['pre_informacion'];
$porque_espana=$_REQUEST['porque_espana'];
$inversion=$_REQUEST['inversion'];
$status=$_REQUEST['status'];
$tramitido_al_crm=$_REQUEST['tramitido_al_crm'];
$fecha=$_REQUEST['fecha'];
$ip=$_REQUEST['ip'];

/*$elaborado_por=$_REQUEST['elaborado_por'];*/



$anulado=$_REQUEST['anulado'];



$pre_informacion = serialize($pre_informacion);
$fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];

$editado_por=$_REQUEST['editado_por'];
$editado_fecha=$fecha ;


$documento=$_REQUEST['documento'];
$cliente=$_REQUEST['cliente'];
$fecha_nacimiento=$_REQUEST['fecha_nacimiento'];
$telefono_oficina=$_REQUEST['telefono_oficina'];
$direccion_domicilio=$_REQUEST['direccion_domicilio'];
$direccion_oficina=$_REQUEST['direccion_oficina'];
$titulacion=$_REQUEST['titulacion'];
$anos_laboral=$_REQUEST['anos_laboral'];
$monto_minimo_inversion=$_REQUEST['monto_minimo_inversion'];
$monto_maximo_inversion=$_REQUEST['monto_maximo_inversion'];
$ultima_visita_espana=$_REQUEST['ultima_visita_espana'];
$tiempo_estadia_ultima_visita=$_REQUEST['tiempo_estadia_ultima_visita'];
$ciudades__visitadas=$_REQUEST['ciudades__visitadas'];
$fecha_estipulada_llegada_espana=$_REQUEST['fecha_estipulada_llegada_espana'];
$integrantes_familiar=$_REQUEST['integrantes_familiar'];
$conyuge_nombres=$_REQUEST['conyuge_nombres'];
$conyuge_apellidos=$_REQUEST['conyuge_apellidos'];
$conyuge_fecha_nacimiento=$_REQUEST['conyuge_fecha_nacimiento'];
$conyuge_documentos=$_REQUEST['conyuge_documentos'];
$conyuge_tel_movil=$_REQUEST['conyuge_tel_movil'];
$conyuge_tel_oficina=$_REQUEST['conyuge_tel_oficina'];
$conyuge_email=$_REQUEST['conyuge_email'];
$hijos_nombre=$_REQUEST['hijos_nombre'];
$hijos_apellidos=$_REQUEST['hijos_apellidos'];
$hijos_fecha_nacimiento=$_REQUEST['hijos_fecha_nacimiento'];
$hijos_documentos=$_REQUEST['hijos_documentos'];
$imagenes=$_REQUEST['imagenes'];
$procedencia_publicitaria=$_REQUEST['procedencia_publicitaria'];

$clave=$_REQUEST['clave'];

$tipo_acceso=$_REQUEST['tipo_acceso'];
$tipo_cartera=$_REQUEST['tipo_cartera'];
$mes_viaje=$_REQUEST['mes_viaje'];
$anio_viaje=$_REQUEST['anio_viaje'];
$movil2=$_REQUEST['movil2'];

$fecha_contratacion=$_REQUEST['fecha_contratacion'];
$nacionalidad=$_REQUEST['nacionalidad'];

$opcion1=$_REQUEST['opcion1'];
$opcion2=$_REQUEST['opcion2'];
$opcion3=$_REQUEST['opcion3'];
$opcion4=$_REQUEST['opcion4'];
$opcion5=$_REQUEST['opcion5'];
$opcion6=$_REQUEST['opcion6'];

$opcion_tipo_1=$_REQUEST['opcion_1_tipo'];
$opcion_tipo_2=$_REQUEST['opcion_2_tipo'];
$opcion_tipo_3=$_REQUEST['opcion_3_tipo'];
$opcion_tipo_4=$_REQUEST['opcion_4_tipo'];
$opcion_tipo_5=$_REQUEST['opcion_5_tipo'];
$opcion_tipo_6=$_REQUEST['opcion_6_tipo'];



$opcion_t_1 = serialize($opcion_tipo_1);
$opcion_t_2 = serialize($opcion_tipo_2);
$opcion_t_3 = serialize($opcion_tipo_3);
$opcion_t_4 = serialize($opcion_tipo_4);
$opcion_t_5 = serialize($opcion_tipo_5);
$opcion_t_6 = serialize($opcion_tipo_6);





$imagenes_array = serialize($imagenes);
$hijos_nombre_array=serialize($hijos_nombre);
$hijos_apellidos_array=serialize($hijos_apellidos);
$hijos_fecha_nacimiento_array=serialize($hijos_fecha_nacimiento);
$hijos_documentos_array=serialize($hijos_documentos);



$qry = "UPDATE `contactos_web` SET 

`nombres`= '$nombres', 
`apellidos`= '$apellidos', 
`pais`= '$pais', 
`email`= '$email', 
`movil`= '$movil', 
`pre_informacion`= '$pre_informacion', 
`porque_espana`= '$porque_espana', 
`inversion`= '$inversion', 
`status`= '$status', 
`tramitido_al_crm`= '$tramitido_al_crm', 
/*`fecha`= '$fecha', */
`ip`= '$ip', 
/*`elaborado_por`= '$elaborado_por', */
`editado_por`= '$editado_por', 
`editado_fecha`= '$editado_fecha', 
`anulado`= '$anulado', 
`fecha_contratacion`= '$fecha_contratacion', 
`nacionalidad`= '$nacionalidad', 
`documento`= '$documento', 
`cliente`= '$cliente', 
`fecha_nacimiento`= '$fecha_nacimiento', 
`telefono_oficina`= '$telefono_oficina', 
`direccion_domicilio`= '$direccion_domicilio', 
`direccion_oficina`= '$direccion_oficina', 
`titulacion`= '$titulacion', 
`anos_laboral`= '$anos_laboral', 
`monto_minimo_inversion`= '$monto_minimo_inversion', 
`monto_maximo_inversion`= '$monto_maximo_inversion', 
`ultima_visita_espana`= '$ultima_visita_espana', 
`tiempo_estadia_ultima_visita`= '$tiempo_estadia_ultima_visita', 
`ciudades__visitadas`= '$ciudades__visitadas', 
`fecha_estipulada_llegada_espana`= '$fecha_estipulada_llegada_espana', 
`integrantes_familiar`= '$integrantes_familiar', 
`conyuge_nombres`= '$conyuge_nombres', 
`conyuge_apellidos`= '$conyuge_apellidos', 
`conyuge_fecha_nacimiento`= '$conyuge_fecha_nacimiento', 
`conyuge_documentos`= '$conyuge_documentos', 
`conyuge_tel_movil`= '$conyuge_tel_movil', 
`conyuge_tel_oficina`= '$conyuge_tel_oficina', 
`conyuge_email`= '$conyuge_email', 
`hijos_nombre`= '$hijos_nombre_array', 
`hijos_apellidos`= '$hijos_apellidos_array', 
`hijos_fecha_nacimiento`= '$hijos_fecha_nacimiento_array', 
`hijos_documentos`= '$hijos_documentos_array', 
`opcion1`= '$opcion1', 
`opcion_tipo_1`= '$opcion_t_1', 
`opcion2`= '$opcion2', 
`opcion_tipo_2`= '$opcion_t_2', 

`opcion3`= '$opcion3', 
`opcion_tipo_3`= '$opcion_t_3', 

`opcion4`= '$opcion4', 
`opcion_tipo_4`= '$opcion_t_4', 

`opcion5`= '$opcion5', 
`opcion_tipo_5`= '$opcion_t_5', 

`opcion6`= '$opcion6', 
`opcion_tipo_6`= '$opcion_t_6', 

`imagenes`= '$imagenes_array',

`movil2`= '$movil2',
`mes_viaje`= '$mes_viaje',
`anio_viaje`= '$anio_viaje',
`procedencia_publicitaria`= '$procedencia_publicitaria',
`clave`= '$clave',
`tipo_acceso`= '$tipo_acceso',
`tipo_cartera`= '$tipo_cartera'



WHERE `contactos_web`.`id` = ".$referencia.";";
 

$resul = mysql_query($qry);



if ($status=='PROSPECTO PAGADO') {



	$qry2 = "INSERT INTO chat (`id_para`, `id_de`, `mensaje`, `fecha_envio`, `ip`) SELECT id , '".$editado_por."', '".'Prospecto Pagado: Id:'.$referencia.' Nombre:'.$nombres.' '.$apellidos."', '".$fechaphp."', '".$ip."' FROM usuarios where anulado <> 1 and tipo = 'administrador';";
 

$resul2 = mysql_query($qry2);
}


if ($status=='CLIENTE') {



	$qry2 = "INSERT INTO chat (`id_para`, `id_de`, `mensaje`, `fecha_envio`, `ip`) SELECT id , '".$editado_por."', '".'Cliente Nuevo: Id:'.$referencia.' Nombre:'.$nombres.' '.$apellidos."', '".$fechaphp."', '".$ip."' FROM usuarios where anulado <> 1 and tipo = 'administrador';";
 

$resul2 = mysql_query($qry2);
}



//echo $qry;


setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Puerto_Rico');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Ficha_de_contacto');
$log->pushHandler(new StreamHandler('../../logs/mod_clientes_edit.log', Logger::NOTICE));
$username =  $_SESSION['usuario']['Nombre'].' '. $_SESSION['usuario']['Apellido'];
$ip=$_SERVER['REMOTE_ADDR'];
// add records to the log
$log->warning('Ficha de contacto editada '.$referencia.' '.$nombres.' '.$apellidos, array('userid' => $editado_por, 'userneme' => $username,'ip' => $ip));
 

if ($resul==1) {
  
echo 'true';




}

else
{
echo 'false'.$qry;


}

  
   die;






 





?>