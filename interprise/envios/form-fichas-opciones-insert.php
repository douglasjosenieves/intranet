<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
/*
 * Following code will list all the products
 */
 
// array for JSON response

 
// include db connect class




require_once __DIR__ . '../../../db_connect.php';
//sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fechaphp = date("Y-m-d H:i:s");


 
$ref=$_REQUEST['ref'];
$fecha=$fechaphp;
$elaborado_por=$_REQUEST['elaborado_por'];
$link=$_REQUEST['link'];
$sector=$_REQUEST['sector'];
$nombre_opcion=$_REQUEST['nombre_opcion'];
$direccion=$_REQUEST['direccion'];
$ciudad=$_REQUEST['ciudad'];
$zona=$_REQUEST['zona'];
$celular=$_REQUEST['celular'];
$local=$_REQUEST['local'];
$nombre_contacto=$_REQUEST['nombre_contacto'];
$vendedor_solicita=$_REQUEST['vendedor_solicita'];
$nosotros_ofrecemos=$_REQUEST['nosotros_ofrecemos'];
$tamano_local=$_REQUEST['tamano_local'];
$alquiler=$_REQUEST['alquiler'];
$antiguedad=$_REQUEST['antiguedad'];
$propietario_dispuesto_traspaso=$_REQUEST['propietario_dispuesto_traspaso'];
$website=$_REQUEST['website'];
$facturacion_mensual=$_REQUEST['facturacion_mensual'];
$datos_adicionales=$_REQUEST['datos_adicionales'];
$comentarios_sobre_negocio=$_REQUEST['comentarios_sobre_negocio'];
$comentarios_sobre_negocio_interno=$_REQUEST['comentarios_sobre_negocio_interno'];
$ventajas_comparativas=$_REQUEST['ventajas_comparativas'];
$capture1=$_REQUEST['capture1'];
$capture2=$_REQUEST['capture2'];
$img = $_REQUEST['img'];
$cod_postal = $_REQUEST['cod_postal'];

$img2 = $_REQUEST['img2'];
$comentarios_sobre_negocio_comercial=$_REQUEST['comentarios_sobre_negocio_comercial'];
$exclusivo=$_REQUEST['exclusivo'];


 
if (is_array($img )){

  foreach( $img  as $key => $n ) {
 $imgArrreglo .= $img[$key].";";
}
}



if (is_array($img )){
foreach( $img2  as $key => $n ) {
 $imgArrreglo2 .= $img2[$key].";";
}
}
$capture1=  $imgArrreglo  ;
$capture2=  $imgArrreglo2  ;
  
 




function codigoSiguiente(){

$resul =  mysql_query("SELECT IF(ISNULL(max( ref)+ 1),'1',max( ref)+ 1)  AS ref FROM form_fichas_opciones");
while($row =  mysql_fetch_array($resul) ) {
return $row['ref'];
}
}

$ref_siguiente=codigoSiguiente();

if (isset($elaborado_por)) {
	
$qry = "INSERT INTO `form_fichas_opciones` (

`ref`,
`fecha`,
`elaborado_por`,
`link`,
`sector`,
`nombre_opcion`,
`direccion`,
`ciudad`,
`zona`,
`cod_postal`,
`celular`,
`local`,
`nombre_contacto`,
`vendedor_solicita`,
`nosotros_ofrecemos`,
`tamano_local`,
`alquiler`,
`antiguedad`,
`propietario_dispuesto_traspaso`,
`website`,
`facturacion_mensual`,
`datos_adicionales`,
`comentarios_sobre_negocio`,
`comentarios_sobre_negocio_interno`,
`ventajas_comparativas`,
`capture1`,
`capture2`,
`comentarios_sobre_negocio_comercial`,
`exclusivo`,
`anulado`

) VALUES ( 
  '$ref_siguiente',
 '$fecha',
 '$elaborado_por',
 '$link',
 '$sector',
 '$nombre_opcion',
 '$direccion',
 '$ciudad',
 '$zona',
 '$cod_postal',
 '$celular',
 '$local',
 '$nombre_contacto',
 '$vendedor_solicita',
 '$nosotros_ofrecemos',
 '$tamano_local',
'$alquiler',
 '$antiguedad',
 '$propietario_dispuesto_traspaso',
 '$website',
 '$facturacion_mensual',
 '$datos_adicionales',
 '$comentarios_sobre_negocio',
 '$comentarios_sobre_negocio_interno',
 '$ventajas_comparativas',
 '$capture1',
 '$capture2',
 '$comentarios_sobre_negocio_comercial',
 '$exclusivo',
 '$anulado'

);";
$resul = mysql_query($qry);

}
//echo $resul;








 
if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}







?>