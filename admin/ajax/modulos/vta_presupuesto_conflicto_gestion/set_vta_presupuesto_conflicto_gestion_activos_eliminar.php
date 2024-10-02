<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaPresupuestoConflicto::SES_CRITERIOS);

if($c == 'vta_presupuesto_conflicto.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_presupuesto_conflicto');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_presupuesto_conflicto');	
	$criterio->delCriterio($c);
}
?>

