<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaOrdenVentaEstadoRemision::SES_CRITERIOS);

if($c == 'vta_orden_venta_estado_remision.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_orden_venta_estado_remision');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_orden_venta_estado_remision');	
	$criterio->delCriterio($c);
}
?>

