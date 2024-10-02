<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GenPrcaEjecucionDetalle::SES_CRITERIOS);

if($c == 'gen_prca_ejecucion_detalle.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gen_prca_ejecucion_detalle');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gen_prca_ejecucion_detalle');	
	$criterio->delCriterio($c);
}
?>

