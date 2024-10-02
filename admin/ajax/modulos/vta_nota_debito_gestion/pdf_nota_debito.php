<?php
include_once '_autoload.php';

include 'pdf_nota_debito_plantilla.php';

$pdf->Output($vta_nota_debito->getNombreArchivoAdjuntoNotaDebito(), 'I');
