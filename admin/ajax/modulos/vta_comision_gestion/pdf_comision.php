<?php
include_once '_autoload.php';

include 'pdf_comision_plantilla.php';

$pdf->Output($vta_comision->getNombreArchivoAdjuntoComision(), 'I');
