<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PerMovMovimiento::SES_CRITERIOS);

if($c == 'per_mov_movimiento.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('per_mov_movimiento');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('per_mov_movimiento');	
	$criterio->delCriterio($c);
}
?>

