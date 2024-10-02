<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CliCentroRecepcion::SES_CRITERIOS);

if($c == 'cli_centro_recepcion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cli_centro_recepcion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cli_centro_recepcion');	
	$criterio->delCriterio($c);
}
?>

