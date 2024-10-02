<?php

include_once '_autoload.php';

$vta_presupuesto_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_enviado_id', 0);
$vta_presupuesto_enviado = VtaPresupuestoEnviado::getOxId($vta_presupuesto_enviado_id);
//Gral::prr($vta_presupuesto_enviado);

if ($vta_presupuesto_enviado) {
    $vta_presupuesto_id = $vta_presupuesto_enviado->getVtaPresupuestoId();
    $vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

    $b64_str_contenido_pdf = $vta_presupuesto_enviado->getAdjunto();
    $str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

    $nombre_fichero = $vta_presupuesto->getNombreArchivoAdjuntoPresupuesto();

    header("Content-type:application/pdf");
    header('Content-disposition: inline; filename="' . $nombre_fichero . '"');

    echo $str_contenido_pdf;
} else {
    echo "No se puede mostrar el PDF";
}