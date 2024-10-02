<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeReciboPdeTributo::SES_CRITERIOS);

if($c == 'pde_recibo_pde_tributo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_recibo_pde_tributo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_recibo_pde_tributo');	
	$criterio->delCriterio($c);
}
?>

