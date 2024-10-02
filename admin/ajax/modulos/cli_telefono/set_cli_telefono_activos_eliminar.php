<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CliTelefono::SES_CRITERIOS);

if($c == 'cli_telefono.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cli_telefono');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cli_telefono');	
	$criterio->delCriterio($c);
}
?>

