<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CliTipoMedioDigital::SES_CRITERIOS);

if($c == 'cli_tipo_medio_digital.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cli_tipo_medio_digital');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cli_tipo_medio_digital');	
	$criterio->delCriterio($c);
}
?>

