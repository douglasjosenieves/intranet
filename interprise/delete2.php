<?php
$directorio='file-upload/images-fopciones-reales/';
$t= $_POST['name'];

//$t= 'comunicate (5).jpg';
$archivo = $directorio.$t;
echo $archivo ;
unlink($archivo); 
?>