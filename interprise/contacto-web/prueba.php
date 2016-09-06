<?php 




$array= 'a:3:{i:0;s:16:"PRETENDO EMIGRAR";i:1;s:26:"NO SE CUANDO PODRE EMIGRAR";i:2;s:44:"ESTOY EN PROCESO DE VENTA DE MIS PROPIEDADES";}';

$arra = unserialize ($array);
echo $arra[2];
 ?>