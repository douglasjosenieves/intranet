<?php 
require_once __DIR__ . '../../../../db_connect.php';
// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 


$texto = $_POST['parametro'];
 
 
			
				$i=0;
$resul =  mysql_query("SELECT * FROM  contactos_web where anulado <> 1 and nombres like '%".$texto."%'  OR  apellidos like '%".$texto."%'  ");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				//echo $row['nombre'];
				$opciones['contacto'][]=$row;
				
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
				
	<li class="manito contactos" data-id="<?php echo $opciones['contacto'][$i]['id'] ?>" data-nombre="<?php echo $opciones['contacto'][$i]['nombres'].' '.$opciones['contacto'][$i]['apellidos'] ?>" data-documento="<?php echo $opciones['contacto'][$i]['docuemnto'] ?>" data-direccion="<?php echo $opciones['contacto'][$i]['direccion_domicilio'] ?>" data-tel="<?php echo $opciones['contacto'][$i]['movil'] ?>" data-email="<?php echo $opciones['contacto'][$i]['email'] ?>" data-fechacontratacion="<?php echo $opciones['contacto'][$i]['fecha_contratacion'] ?>" title="<?php echo $opciones['contacto'][$i]['nombres'].' '.$opciones['contacto'][$i]['apellidos'] ?>" > <?php echo $opciones['contacto'][$i]['id'].' '.$opciones['contacto'][$i]['nombres'].' '.$opciones['contacto'][$i]['apellidos'] ?></li>

			 
															
					     
			 
					<?php $i++;  }?>
					