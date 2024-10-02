<?php

include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, "vta_presupuesto_id", 0);
Gral::setSes(VtaPresupuesto::PRESUPUESTO_ACTIVO, $vta_presupuesto_id);