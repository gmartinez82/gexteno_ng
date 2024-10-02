<?php
include_once '_autoload.php';

$pde_factura_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_enviado_id', 0);
$pde_factura_enviado = PdeFacturaEnviado::getOxId($pde_factura_enviado_id);

$pde_factura_id = $pde_factura_enviado->getPdeFacturaId();
$pde_factura = PdeFactura::getOxId($pde_factura_id);

$b64_str_contenido_pdf = $pde_factura_enviado->getAdjunto();
$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

$nombre_fichero = $pde_factura->getNombreArchivoAdjuntoFactura();

header("Content-type:application/pdf");
header('Content-disposition: inline; filename="'.$nombre_fichero.'"');

echo $str_contenido_pdf;
