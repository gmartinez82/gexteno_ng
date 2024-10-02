<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CtrlEquipo::SES_CRITERIOS);

if($c == 'ctrl_equipo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ctrl_equipo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ctrl_equipo');	
	$criterio->delCriterio($c);
}
?>

