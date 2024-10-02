<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaNotaCreditoTipoEstado::SES_CRITERIOS);

if($c == 'vta_nota_credito_tipo_estado.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_nota_credito_tipo_estado');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_nota_credito_tipo_estado');	
	$criterio->delCriterio($c);
}
?>

