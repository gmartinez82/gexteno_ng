<?php
include_once '_autoload.php';

include 'pdf_nota_credito_kude_plantilla.php';

$pdf->Output($vta_nota_credito->getNombreArchivoAdjuntoNotaCredito(), 'I');
