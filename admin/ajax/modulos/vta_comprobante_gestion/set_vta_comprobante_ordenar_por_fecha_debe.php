<?php
unset($vta_comprobantes);

foreach ($vta_facturas as $vta_factura) {
    $vta_comprobantes[] = $vta_factura;
}
foreach ($vta_nota_debitos as $vta_nota_debito) {
    $vta_comprobantes[] = $vta_nota_debito;
}
foreach ($vta_ajuste_debes as $vta_ajuste_debe) {
    $vta_comprobantes[] = $vta_ajuste_debe;
}

usort($vta_comprobantes, 'ordenarDebe');

function ordenarDebe($vta_comprobante, $vta_comprobante_comparacion) {

//    $fecha_emision = strtotime(date($vta_comprobante->getFechaEmision()));
    $fecha_emision = strtotime(date($vta_comprobante->getCreado()));
//    $fecha_emision_comparacion = strtotime(date($vta_comprobante_comparacion->getFechaEmision()));
    $fecha_emision_comparacion = strtotime(date($vta_comprobante_comparacion->getCreado()));

    if ($fecha_emision == $fecha_emision_comparacion)
        return 0;
    
    return ($fecha_emision > $fecha_emision_comparacion) ? 1 : -1;
}
