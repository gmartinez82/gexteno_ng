<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeOcReclamo::SES_CRITERIOS);

if($c == 'pde_oc_reclamo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_oc_reclamo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_oc_reclamo');	
	$criterio->delCriterio($c);
}
?>

