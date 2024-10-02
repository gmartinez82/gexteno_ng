<?php
include_once '_autoload.php';

include 'pdf_remito_plantilla.php';

$pdf->Output($vta_remito->getNombreArchivoAdjuntoRemito(), 'I');
