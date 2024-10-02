<?php
include_once '_autoload.php';

include 'pdf_ajuste_debe_plantilla.php';

$pdf->Output($vta_ajuste_debe->getNombreArchivoAdjuntoAjusteDebe(), 'I');
