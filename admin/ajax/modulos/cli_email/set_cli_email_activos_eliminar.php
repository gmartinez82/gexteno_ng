<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CliEmail::SES_CRITERIOS);

if($c == 'cli_email.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cli_email');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cli_email');	
	$criterio->delCriterio($c);
}
?>

