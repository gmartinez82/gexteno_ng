<?php
include_once '_autoload.php';

include 'pdf_recibo_plantilla.php';

$pdf->Output($pde_recibo->getNombreArchivoAdjuntoRecibo(), 'I');
