<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralNovedadMotivoExtendido::SES_CRITERIOS);

if($c == 'gral_novedad_motivo_extendido.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_novedad_motivo_extendido');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_novedad_motivo_extendido');	
	$criterio->delCriterio($c);
}
?>

