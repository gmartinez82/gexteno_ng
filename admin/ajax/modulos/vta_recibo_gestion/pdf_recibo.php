<?php
include_once '_autoload.php';

include 'pdf_recibo_plantilla.php';

$pdf->Output($vta_recibo->getNombreArchivoAdjuntoRecibo(), 'I');
