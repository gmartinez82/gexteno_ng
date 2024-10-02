<?php
include_once '_autoload.php';

$vta_factura_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_enviado_id', 0);
$vta_factura_enviado = VtaFacturaEnviado::getOxId($vta_factura_enviado_id);

$vta_factura_id = $vta_factura_enviado->getVtaFacturaId();
$vta_factura = VtaFactura::getOxId($vta_factura_id);

$b64_str_contenido_pdf = $vta_factura_enviado->getAdjunto();
$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

$nombre_fichero = $vta_factura->getNombreArchivoAdjuntoFactura();

header("Content-type:application/pdf");
header('Content-disposition: inline; filename="'.$nombre_fichero.'"');

echo $str_contenido_pdf;
