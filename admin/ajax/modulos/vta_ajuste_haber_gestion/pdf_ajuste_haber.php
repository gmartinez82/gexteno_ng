<?php
include_once '_autoload.php';

include 'pdf_ajuste_haber_plantilla.php';

$pdf->Output($vta_ajuste_haber->getNombreArchivoAdjuntoAjusteHaber(), 'I');
