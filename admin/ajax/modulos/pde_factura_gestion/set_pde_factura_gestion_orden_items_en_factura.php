<?php

include '_autoload.php';

$pde_factura_pde_oc_id = Gral::getVars(Gral::VARS_POST, 'pde_factura_pde_oc_id', 0);
$orden = Gral::getVars(Gral::VARS_POST, 'orden', 0);

$pde_factura_pde_oc = PdeFacturaPdeOc::getOxId($pde_factura_pde_oc_id);

if ($pde_factura_pde_oc) {
    $pde_factura_pde_oc->setOrden($orden);
    $pde_factura_pde_oc->save();
}
?>