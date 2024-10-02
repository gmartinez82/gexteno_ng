<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeRecepcionAgrupacion::SES_CRITERIOS);

if($c == 'pde_recepcion_agrupacion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_recepcion_agrupacion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_recepcion_agrupacion');	
	$criterio->delCriterio($c);
}
?>

