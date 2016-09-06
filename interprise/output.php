<?php
require_once 'lib/dompdf/dompdf_config.inc.php';

$dompdf = new DOMPDF();
$dompdf->load_html( file_get_contents( 'http://localhost/intranet/interprise/reporte-fichas-opciones-pdf.php?id=63' ) );
$dompdf->render();
$dompdf->stream("mi_archivo.pdf");