<?php session_start(); error_reporting(0);
header('Content-type: application/json');


/*
 * Following code will list all the products
 */
 
// array for JSON response

 
// include db connect class

require_once __DIR__ . '/db_connect.php';
require_once __DIR__ .  '/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler; 
// connecting to db
$db = new DB_CONNECT();

//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Puerto_Rico');
$fechaphp = date("Y-m-d H:i:s");

$email=$_REQUEST['email'];
$clave=$_REQUEST['clave'];

//827ccb0eea8a706c4c34a16891f84e7b por defecto 12345

$clavemd5 = md5($clave);
//sleep(5);

 
  
  $resul =  mysql_query("SELECT * FROM usuarios where email='$email' and clave='$clavemd5' and anulado <> 1");
  while($row =  mysql_fetch_array($resul) ) {
$duplicidad = $row['nombre'];
$usuario = $row['usuario'];
$nombre = $row['nombre'];
$apellido = $row['apellido'];
$email = $row['email'];
$id = $row['id'];
$telefono = $row['tel'];
$documento = $row['documento'];
$tipo = $row['tipo'];
$foto = $row['foto'];
$color = $row['color'];
$anulado =  $row['anulado'];
$cargo =  $row['cargo'];
//echo $row['nombre'];
}


  session_start();

  $arreglo = array('Ingreso' =>'si', 
'Id' =>$id,
'Nombre' =>$nombre,
'Usuario' =>$usuario,
'Apellido' =>$apellido,
'Email' =>$email,
'Telefono' =>$telefono,
'Documento' =>$documento,
'Tipo' =>$tipo,
'Foto' =>$foto,
'Color' =>$color,
'Cargo' =>$cargo,
'Anulado' =>$anulado);


  $resul =  mysql_query("UPDATE `usuarios` SET `fecha_login` = '$fechaphp' WHERE `usuarios`.`id` = $id;");


  
// get all products from products table
  //$a = array();

if (!empty($email)) {




if ($duplicidad =='') {

 unset($_SESSION['usuario'] );
$status = array(
    'type'=>'failed',
    'message'=>$email. ' Verifique sus datos'
  );
   
}


else {
// create a log channel
$log = new Logger('loging');
$log->pushHandler(new StreamHandler('interprise/logs/mod_login.log', Logger::INFO));
$username =  $nombre.' '.$apellido;
$user = $id;
$ip=$_SERVER['REMOTE_ADDR'];
// add records to the log
$log->info('Inicio de session '.$email, array('userid' => $user, 'userneme' => $username ,'tipo' => $tipo, 'ip' => $ip));

  

$_SESSION['usuario'] = $arreglo;
$status = array(
    'type'=>'success',
    'message'=>$nombre. ' Bienvenido!',
    'nombre'=>$nombre,
    'apellido'=>$apellido,
    'email'=>$email,
    'id'=>$id,
    
    'telefono'=>$telefono,
    'documento'=>$documento,
     'cargo'=>$cargo,
    'anulado'=>$anulado

  );

}

 // echo $status;
  echo json_encode($status);
   die;
}
?>