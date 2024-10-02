<?php
include_once '_autoload.php';

$vta_ajuste_haber_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_haber_enviado_id', 0);
$vta_ajuste_haber_enviado = VtaAjusteHaberEnviado::getOxId($vta_ajuste_haber_enviado_id);

$vta_ajuste_haber_id = $vta_ajuste_haber_enviado->getVtaAjusteHaberId();
$vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);

$b64_str_contenido_pdf = $vta_ajuste_haber_enviado->getAdjunto();
$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

$nombre_fichero = $vta_ajuste_haber->getNombreArchivoAdjuntoAjusteHaber();

header("Content-type:application/pdf");
header('Content-disposition: inline; filename="'.$nombre_fichero.'"');

echo $str_contenido_pdf;
