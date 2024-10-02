<?php
include_once '_autoload.php';

$vta_nota_credito_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_credito_enviado_id', 0);
$vta_nota_credito_enviado = VtaNotaCreditoEnviado::getOxId($vta_nota_credito_enviado_id);

$vta_nota_credito_id = $vta_nota_credito_enviado->getVtaNotaCreditoId();
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);

$b64_str_contenido_pdf = $vta_nota_credito_enviado->getAdjunto();
$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

$nombre_fichero = $vta_nota_credito->getNombreArchivoAdjuntoNotaCredito();

header("Content-type:application/pdf");
header('Content-disposition: inline; filename="'.$nombre_fichero.'"');

echo $str_contenido_pdf;
