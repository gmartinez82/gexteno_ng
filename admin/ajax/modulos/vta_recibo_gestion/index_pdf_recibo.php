<?php
include_once '_autoload.php';

$vta_recibo_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_recibo_enviado_id', 0);
$vta_recibo_enviado = VtaReciboEnviado::getOxId($vta_recibo_enviado_id);

$vta_recibo_id = $vta_recibo_enviado->getVtaReciboId();
$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);

$b64_str_contenido_pdf = $vta_recibo_enviado->getAdjunto();
$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

$nombre_fichero = $vta_recibo->getNombreArchivoAdjuntoRecibo();

header("Content-type:application/pdf");
header('Content-disposition: inline; filename="'.$nombre_fichero.'"');

echo $str_contenido_pdf;
