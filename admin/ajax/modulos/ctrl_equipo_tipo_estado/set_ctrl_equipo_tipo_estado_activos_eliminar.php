<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CtrlEquipoTipoEstado::SES_CRITERIOS);

if($c == 'ctrl_equipo_tipo_estado.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ctrl_equipo_tipo_estado');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ctrl_equipo_tipo_estado');	
	$criterio->delCriterio($c);
}
?>

