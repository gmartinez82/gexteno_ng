<?php

include_once '_autoload.php';

$vta_remito_ajuste_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_enviado_id', 0);
$vta_remito_ajuste_enviado = VtaRemitoAjusteEnviado::getOxId($vta_remito_ajuste_enviado_id);

if ($vta_remito_ajuste_enviado) {
    $b64_str_contenido_pdf = $vta_remito_ajuste_enviado->getAdjunto();
    $str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

    //$nombre_fichero = $vta_presupuesto->getNombreArchivoAdjuntoPresupuesto();
    $nombre_fichero = $vta_remito_ajuste_enviado->getAsunto();

    header("Content-type:application/pdf");
    header('Content-disposition: inline; filename="' . $nombre_fichero . '"');

    echo $str_contenido_pdf;
}else {
    echo "No se puede mostrar el PDF";
}