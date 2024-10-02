<?php
include_once '_autoload.php';

$vta_ajuste_debe_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_debe_enviado_id', 0);
$vta_ajuste_debe_enviado = VtaAjusteDebeEnviado::getOxId($vta_ajuste_debe_enviado_id);

$vta_ajuste_debe_id = $vta_ajuste_debe_enviado->getVtaAjusteDebeId();
$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);

$b64_str_contenido_pdf = $vta_ajuste_debe_enviado->getAdjunto();
$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

$nombre_fichero = $vta_ajuste_debe->getNombreArchivoAdjuntoAjusteDebe();

header("Content-type:application/pdf");
header('Content-disposition: inline; filename="'.$nombre_fichero.'"');

echo $str_contenido_pdf;
