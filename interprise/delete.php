<?php
$directorio='file-upload/';
$t= $_POST['name'];

//$t= 'comunicate (5).jpg';
$archivo = $directorio.$t;
echo $archivo ;
unlink($archivo); 
?>