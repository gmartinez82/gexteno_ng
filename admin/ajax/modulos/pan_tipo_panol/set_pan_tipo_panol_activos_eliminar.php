<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PanTipoPanol::SES_CRITERIOS);

if($c == 'pan_tipo_panol.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pan_tipo_panol');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pan_tipo_panol');	
	$criterio->delCriterio($c);
}
?>

