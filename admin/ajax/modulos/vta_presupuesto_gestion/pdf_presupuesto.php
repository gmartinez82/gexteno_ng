<?php
include_once '_autoload.php';

include 'pdf_presupuesto_plantilla.php';

$pdf->Output($vta_presupuesto->getNombreArchivoAdjuntoPresupuesto(), 'I');
