<?php 

$total = 48000;

	switch($total)
    {
    case ($total >= 25000 and $total <= 40000):
    $porcentaje_aplicado = "3";
    break;

    case ($total >= 40001 and $total <= 100000):
    $porcentaje_aplicado = "3";
    break;

   case ($total >= 100001 and $total <= 200000):
    $porcentaje_aplicado = "2";
    break;

      case ($total >= 200001 and $total <= 300000):
    $porcentaje_aplicado = "1";
    break;

       case ($total >= 300001 and $total <= 400000):
    $porcentaje_aplicado = "2";
    break;

       case ($total >= 400001 and $total <= 500000):
    $porcentaje_aplicado = "1.5";
    break;


    case ($total >= 500001):
    $porcentaje_aplicado = "1";
    break;

   
    }

   
     
$importe = $total * $porcentaje_aplicado /100;;
$iva= $importe*21/100;

echo $porcentaje_aplicado;
echo '<br>';
echo $importe ;
echo '<br>';
echo $iva;

 ?>

