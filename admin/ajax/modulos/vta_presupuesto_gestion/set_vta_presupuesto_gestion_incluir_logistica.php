<?php
include "_autoload.php";

$incluir_logistica = Gral::getVars(Gral::VARS_POST, "incluir_logistica", 0);

$vta_presupuesto = VtaPresupuesto::getPresupuestoActivo();
if($vta_presupuesto){    
    $vta_presupuesto->setAplicarCalculoLogistica($incluir_logistica);
}