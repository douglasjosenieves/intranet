<?php
$directorio='file-upload/contactos-documentos/';
$t= $_POST['name'];

//$t= 'comunicate (5).jpg';
$archivo = $directorio.$t;
echo $archivo ;
unlink($archivo); 
?>