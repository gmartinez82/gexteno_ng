<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PrvTipo::SES_CRITERIOS);

if($c == 'prv_tipo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('prv_tipo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('prv_tipo');	
	$criterio->delCriterio($c);
}
?>

