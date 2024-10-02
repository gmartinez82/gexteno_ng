<?php
include "_autoload.php";

$pde_oc_id = Gral::getVars(Gral::VARS_GET, 'pde_oc_id', 0);
$cont = Gral::getVars(Gral::VARS_GET, 'cont', 0);

$pde_oc = PdeOc::getOxId($pde_oc_id);

include "bloque_pde_oc_listado_uno.php";
