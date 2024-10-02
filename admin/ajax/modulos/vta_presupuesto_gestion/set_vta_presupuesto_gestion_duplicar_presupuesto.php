<?php

include_once '_autoload.php';

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
//Gral::prr($vta_presupuesto);
if($vta_presupuesto)
{
    $vta_presupuesto->setDuplicarVtaPrespuesto();
}


?>