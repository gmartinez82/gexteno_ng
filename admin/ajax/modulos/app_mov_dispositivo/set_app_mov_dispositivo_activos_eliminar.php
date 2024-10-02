<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(AppMovDispositivo::SES_CRITERIOS);

if($c == 'app_mov_dispositivo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('app_mov_dispositivo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('app_mov_dispositivo');	
	$criterio->delCriterio($c);
}
?>

