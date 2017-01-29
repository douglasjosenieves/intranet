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




 $qry_delete = "DELETE FROM ".TABLA."  where id_opcion = '$referencia' and categoria = '$categoria'";
$resul = mysql_query($qry_delete);

 

if ($id_cliente != '') {
foreach ($id_cliente as $key => $value) {

$qry = "INSERT INTO  ".TABLA."
( 
`id_cliente`,
`id_opcion`,
`categoria`,
`anulado`)
VALUES
( 
'$id_cliente[$key]',
'$referencia',
'$categoria',
'$anulado');
";

$resul = mysql_query($qry);
	

 if ($notificar[$key]!='') {
 
 /*$nombres = $nombres_cliente[$key];
 $apellidos = $apellidos_cliente[$key];
 $email = $email_cliente[$key];
 $id_contacto = $id_cliente[$key];
 $elaborado_por= $ins_user;
 require_once 'notificacion.php';
 */
 	
 }




}

}







$id_asignado = mysql_insert_id();

if ($resul==1) {
  
echo $resul.'-'.$id_asignado;
}

else
{
echo $resul;
echo 'false'.$qry;


}




  
   die;
 





?>