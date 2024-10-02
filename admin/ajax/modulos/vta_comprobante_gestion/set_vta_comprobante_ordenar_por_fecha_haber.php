<?php
unset($vta_comprobantes);

foreach ($vta_recibos as $vta_recibo) {
    $vta_comprobantes[] = $vta_recibo;
}

foreach ($vta_nota_creditos as $vta_nota_credito) {
    $vta_comprobantes[] = $vta_nota_credito;
}

foreach ($vta_ajuste_habers as $vta_ajuste_haber) {
    $vta_comprobantes[] = $vta_ajuste_haber;
}

usort($vta_comprobantes, 'ordenarHaber');

function ordenarHaber($vta_comprobante, $vta_comprobante_comparacion) {

//    $fecha_emision = strtotime(date($vta_comprobante->getFechaEmision()));
    $fecha_emision = strtotime(date($vta_comprobante->getCreado()));
//    $fecha_emision_comparacion = strtotime(date($vta_comprobante_comparacion->getFechaEmision()));
    $fecha_emision_comparacion = strtotime(date($vta_comprobante_comparacion->getCreado()));

    if ($fecha_emision == $fecha_emision_comparacion)
        return 0;

    return ($fecha_emision > $fecha_emision_comparacion) ? 1 : -1;
}
