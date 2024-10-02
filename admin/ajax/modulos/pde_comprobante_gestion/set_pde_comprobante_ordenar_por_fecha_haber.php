<?php
unset($pde_comprobantes);

foreach ($pde_recibos as $pde_recibo) {
    $pde_comprobantes[] = $pde_recibo;
}

foreach ($pde_nota_creditos as $pde_nota_credito) {
    $pde_comprobantes[] = $pde_nota_credito;
}

usort($pde_comprobantes, 'ordenarHaber');

function ordenarHaber($pde_comprobante, $pde_comprobante_comparacion) {

//    $fecha_emision = strtotime(date($pde_comprobante->getFechaEmision()));
    $fecha_emision = strtotime(date($pde_comprobante->getCreado()));
//    $fecha_emision_comparacion = strtotime(date($pde_comprobante_comparacion->getFechaEmision()));
    $fecha_emision_comparacion = strtotime(date($pde_comprobante_comparacion->getCreado()));

    if ($fecha_emision == $fecha_emision_comparacion)
        return 0;

    return ($fecha_emision > $fecha_emision_comparacion) ? 1 : -1;
}
