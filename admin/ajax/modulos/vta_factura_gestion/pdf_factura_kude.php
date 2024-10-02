<?php
include_once '_autoload.php';

include 'pdf_factura_kude_plantilla.php';

$pdf->Output($vta_factura->getNombreArchivoAdjuntoFactura(), 'I');
