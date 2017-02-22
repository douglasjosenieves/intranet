<?php 
require_once __DIR__ . '../../../../db_connect.php';
// connecting to db
$con = new DB_CONNECT();
require_once '../envios/config.php';
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 


$texto = $_POST['parametro'];
  if ($texto!='') {
 
			
				$i=0;
$resul =  mysql_query("SELECT * FROM form_fichas_opciones_franquicias where   anulado <> 1 and nombre_opcion like '%".$texto."%'  ");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				//echo $row['nombre'];
				$opciones['contacto'][]=$row;
				
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
				
		<li class="fichasli manito" data-id="<?php echo $opciones['contacto'][$i]['ref']  ?>" data-sector="<?php echo $opciones['contacto'][$i]['sector']  ?> " data-opcion="<?php echo $opciones['contacto'][$i]['nombre_opcion']  ?>" data-ofrecemos="<?php echo $opciones['contacto'][$i]['inversion']  ?>" data-inversion="<?php echo $opciones['contacto'][$i]['inversion']  ?>" ><?php echo $opciones['contacto'][$i]['ref']  ?> <?php echo $opciones['contacto'][$i]['nombre_opcion']  ?></li>


			 
															
					     
			 
					<?php $i++;  }}?>
					