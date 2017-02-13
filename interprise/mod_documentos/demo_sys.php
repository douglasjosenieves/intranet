<?php 
require_once '../../vendor/autoload.php';	

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

ob_start();
$monto = '1.000.000';
require_once 'demo.php';
$documento = ob_get_clean();
$dompdf->loadHtml($documento);

  

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('demo.pdf');

		

 ?>