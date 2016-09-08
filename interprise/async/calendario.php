<?php require_once '../../PHPPaging.lib.php';
header('Content-type: application/json');
// connecting to db
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'] ;
require_once '../../db_connect.php';
require_once '../../PHPPaging.lib.php';

// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 



			
				$i=0;
				$resul =  mysql_query("SELECT * from calendario");
				while($row =  mysql_fetch_array($resul) ) {
				
			 $event_array[] = array(
            'id' => $row['id'],
            'title' => $row['titulo'],
            'start' => $row['start'],
            'end' => $row['end']
        );
				}
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
			
				




   

echo json_encode($event_array);

 ?>