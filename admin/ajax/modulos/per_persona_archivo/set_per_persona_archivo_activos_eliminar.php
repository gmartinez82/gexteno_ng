<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PerPersonaArchivo::SES_CRITERIOS);

if($c == 'per_persona_archivo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('per_persona_archivo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('per_persona_archivo');	
	$criterio->delCriterio($c);
}
?>

