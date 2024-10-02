<?php
include_once '_autoload.php';

include 'pdf_hoja_ruta_plantilla.php';

$pdf->Output($vta_hoja_ruta->getNombreArchivoAdjuntoHojaRuta(), 'I');
