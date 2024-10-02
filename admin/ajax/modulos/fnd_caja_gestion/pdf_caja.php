<?php
include_once '_autoload.php';

include 'pdf_caja_plantilla.php';

$pdf->Output($fnd_caja->getNombreArchivoAdjuntoCaja(), 'I');
