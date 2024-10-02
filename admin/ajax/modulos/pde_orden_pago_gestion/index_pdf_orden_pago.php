<?php
include_once '_autoload.php';

$pde_orden_pago_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_enviado_id', 0);
$pde_orden_pago_enviado = PdeOrdenPagoEnviado::getOxId($pde_orden_pago_enviado_id);

$pde_orden_pago_id = $pde_orden_pago_enviado->getPdeOrdenPagoId();
$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);

$b64_str_contenido_pdf = $pde_orden_pago_enviado->getAdjunto();
$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

$nombre_fichero = $pde_orden_pago->getNombreArchivoAdjuntoOrdenPago();

header("Content-type:application/pdf");
header('Content-disposition: inline; filename="'.$nombre_fichero.'"');

echo $str_contenido_pdf;
