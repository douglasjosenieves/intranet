		<div class="col-xs-12 col-lg-6">
						<div class="box box-without-padding">
							<div class="clearfix boxHeader boxHeaderBorders">
								<h2 class="boxTitle pull-left">Recientes opciones de negocio</h2>
								<div class="btn-group pull-right boxHeaderOptions">
									<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="zmdi zmdi-more-vert"></i>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Time span</a></li>
										<li><a href="#" title="#"><i class="zmdi zmdi-chart zmdi-hc-fw"></i> Chart type</a></li>
										<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
									</ul>
								</div>	
							</div>

							<div class="simpleList simpleListImages">
								<ul>
									

<?php 		
		
		
		
require_once __DIR__ . '../../db_connect.php';
//sleep(2);

// carpeta interprise ../../db_connect.php  ../../../db_connect.php carpeta envios
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fechaphp = date("Y-m-d H:i:s");

$i = 0;
$resul =  mysql_query("SELECT * FROM `form_fichas_opciones` where anulado <> 1 order by ref desc limit 3");
					while($row =  mysql_fetch_array($resul) ) {
					
									
					// echo $row['nombre'];
					$mysql['opciones'][$i]=$row;


	$imagen = explode(';', $mysql['opciones'][$i]['capture1'] );
	

if (!empty($imagen[0])) {

	$imagen0 = 'file-upload/'.$imagen[0].'';
	}

else{

$imagen0 = 'img/sin_imagen_disponible.jpg';
	}
	 ?>



									<li>
										<a href="forms-fichas-opciones-ver.php?id=<?php echo $mysql['opciones'][$i]['ref']; ?>" title="#">
											<i class="zmdi zmdi-chevron-right arrow"></i>
											<div class="image">
												<img src="<?php  echo $imagen0 ;   ?>" alt="#" width="81" height="66">
											</div>
										<?php  echo $mysql['opciones'][$i]['nombre_opcion']   ?>
											<span class="info"><?php  echo $mysql['opciones'][$i]['fecha']   ?></span>
										</a>
									</li>

<?php
 $i++;					
} 
?>
									
								</ul>
							</div>
						</div>
					</div>