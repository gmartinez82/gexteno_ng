<?php
unset($pde_comprobantes);

foreach ($pde_facturas as $pde_factura) {
    $pde_comprobantes[] = $pde_factura;
}
foreach ($pde_nota_debitos as $pde_nota_debito) {
    $pde_comprobantes[] = $pde_nota_debito;
}

usort($pde_comprobantes, 'ordenarDebe');

function ordenarDebe($pde_comprobante, $pde_comprobante_comparacion) {

//    $fecha_emision = strtotime(date($pde_comprobante->getFechaEmision()));
    $fecha_emision = strtotime(date($pde_comprobante->getCreado()));
//    $fecha_emision_comparacion = strtotime(date($pde_comprobante_comparacion->getFechaEmision()));
    $fecha_emision_comparacion = strtotime(date($pde_comprobante_comparacion->getCreado()));

    if ($fecha_emision == $fecha_emision_comparacion)
        return 0;
    
    return ($fecha_emision > $fecha_emision_comparacion) ? 1 : -1;
}
