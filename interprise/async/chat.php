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
require_once '../usuario_funtion.php';
$usuario = $_REQUEST['usuario'];

			
				$i=0;
				$resul =  mysql_query("SELECT * from chat where anulado <> 1 and visto <> 1 and id_para = $usuario order by id desc");
				while($row =  mysql_fetch_array($resul) ) { ?> 
				


		
<li>
<a href="#" title="#" class="clearfix">
<img src="img/usuarios/chat/<?php $usuario = usuarioFuntion ($row['id_de']) ; echo $usuario[0]['foto']  ?>" alt="#" width="44" height="44" class="pull-left">
<span class="pull-left">
<strong class="text-gray"><?php $usuario = usuarioFuntion ($row['id_de']) ; echo ucwords  ( $usuario[0]['nombre'].' '.$usuario[0]['apellido'] ) ?></strong><br />
<span class="text-gray"><?php echo $row['mensaje'] ?>	</span>
</span>
<span class="pull-right"><?php  $hoy = date("M j,  g:i:s a", strtotime($row['fecha_envio']));   echo $hoy ?></span>
</a>
</li>
   
 
				
				 

<?php } ?>			




