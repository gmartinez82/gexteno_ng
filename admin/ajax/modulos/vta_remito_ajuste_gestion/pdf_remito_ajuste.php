<?php
include_once '_autoload.php';

include 'pdf_remito_ajuste_plantilla.php';

$pdf->Output($vta_remito_ajuste->getNombreArchivoAdjuntoRemitoAjuste(), 'I');
