<?php
include_once '_autoload.php';

$vta_comision_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_comision_enviado_id', 0);
$vta_comision_enviado = VtaComisionEnviado::getOxId($vta_comision_enviado_id);

$vta_comision_id = $vta_comision_enviado->getVtaComisionId();
$vta_comision = VtaComision::getOxId($vta_comision_id);

$b64_str_contenido_pdf = $vta_comision_enviado->getAdjunto();
$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

$nombre_fichero = $vta_comision->getNombreArchivoAdjuntoComision();

header("Content-type:application/pdf");
header('Content-disposition: inline; filename="'.$nombre_fichero.'"');

echo $str_contenido_pdf;
