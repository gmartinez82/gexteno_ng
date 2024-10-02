<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaRemitoEnviado::SES_CRITERIOS);

if($c == 'vta_remito_enviado.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_remito_enviado');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_remito_enviado');	
	$criterio->delCriterio($c);
}
?>

