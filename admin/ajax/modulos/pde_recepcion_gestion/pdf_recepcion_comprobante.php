<?php
include_once '_autoload.php';

include 'pdf_recepcion_plantilla.php';

$pdf->Output($pde_recepcion->getNombreArchivoAdjuntoRecepcion(), 'I');
return;
?>
