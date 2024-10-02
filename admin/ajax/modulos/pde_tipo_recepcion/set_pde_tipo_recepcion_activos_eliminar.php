<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeTipoRecepcion::SES_CRITERIOS);

if($c == 'pde_tipo_recepcion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_tipo_recepcion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_tipo_recepcion');	
	$criterio->delCriterio($c);
}
?>

