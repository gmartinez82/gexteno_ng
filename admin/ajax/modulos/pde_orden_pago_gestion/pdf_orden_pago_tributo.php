<?php
include_once '_autoload.php';

include 'pdf_orden_pago_tributo_plantilla.php';

$pdf->Output($pde_orden_pago->getNombreArchivoAdjuntoOrdenPago(), 'I');
