<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeTipoRecibo::SES_CRITERIOS);

if($c == 'pde_tipo_recibo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_tipo_recibo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_tipo_recibo');	
	$criterio->delCriterio($c);
}
?>

