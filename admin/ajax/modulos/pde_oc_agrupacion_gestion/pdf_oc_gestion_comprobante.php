<?php
include_once '_autoload.php';

include 'pdf_oc_gestion_plantilla.php';

$pdf->Output($pde_oc_agrupacion->getNombreArchivoAdjuntoOrdenCompraAgrupacion(), 'I');
?>