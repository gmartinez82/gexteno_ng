<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(OsTipoResolucion::SES_CRITERIOS);

if($c == 'os_tipo_resolucion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('os_tipo_resolucion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('os_tipo_resolucion');	
	$criterio->delCriterio($c);
}
?>

