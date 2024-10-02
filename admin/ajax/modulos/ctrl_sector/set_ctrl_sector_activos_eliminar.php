<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CtrlSector::SES_CRITERIOS);

if($c == 'ctrl_sector.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ctrl_sector');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ctrl_sector');	
	$criterio->delCriterio($c);
}
?>

