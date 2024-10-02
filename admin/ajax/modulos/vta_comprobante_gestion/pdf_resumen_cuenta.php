<?php
include_once '_autoload.php';

include 'pdf_resumen_cuenta_plantilla.php';

$pdf->Output(Gral::getConfig('conf_proyecto_min').' - Resumen de Cuenta de Cliente', 'I');
