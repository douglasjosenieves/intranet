<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
require_once __DIR__ . '../../../../db_connect.php';
require_once 'config.php';
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

 
 $id_cliente=$_REQUEST['id_cliente'];
$des_cliente=$_REQUEST['des_cliente'];

$comentarios=$_REQUEST['comentarios'];
$fecha_terminacion=$_REQUEST['fecha_terminacion'];
$tipos=$_REQUEST['tipos'];
$id_cliente = serialize($id_cliente);
$des_cliente = serialize($des_cliente);



$qry = "";
 

$resul = mysql_query($qry);







 

if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}


  
   
 





?>