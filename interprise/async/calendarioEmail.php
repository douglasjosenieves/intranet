<?php require_once '../../PHPPaging.lib.php';
 
// connecting to db
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'] ;
require_once '../../db_connect.php';
require_once '../../PHPPaging.lib.php';

// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 

$cliente = $_REQUEST['cliente'];

			
				$i=0;
				$resul =  mysql_query("SELECT * from calendario where anulado <> 1 and id_contacto = '$cliente'");
				while($row =  mysql_fetch_array($resul) ) {
			 
			 
                               //echo $row['titulo'];
      
							
			 
			
				




   

 

 ?>




<label>
<input type="radio"  name="radioCita">
<span><?php       echo $row['titulo'].' '.$row['start']; ?></span>
</label>





<?php  }?>