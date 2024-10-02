<?php
include "_autoload.php";

$pde_oc_id = Gral::getVars(Gral::VARS_GET, 'pde_oc_id', 0);
$pde_factura_pde_oc_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_pde_oc_id', 0);

$pde_oc = PdeOc::getOxId($pde_oc_id);
$pde_factura_pde_oc = PdeFacturaPdeOc::getOxId($pde_factura_pde_oc_id);

if($pde_factura_pde_oc){
    $pde_factura_pde_oc->setDesvincularOC($observacion = 'Se retrotrae estado por desvinculacion de OC individual');
}
