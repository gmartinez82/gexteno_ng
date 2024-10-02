<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeOcTipoEstadoFacturacion::SES_CRITERIOS);

if($c == 'pde_oc_tipo_estado_facturacion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_oc_tipo_estado_facturacion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_oc_tipo_estado_facturacion');	
	$criterio->delCriterio($c);
}
?>

