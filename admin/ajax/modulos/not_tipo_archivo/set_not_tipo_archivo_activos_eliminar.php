<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(NotTipoArchivo::SES_CRITERIOS);

if($c == 'not_tipo_archivo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('not_tipo_archivo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('not_tipo_archivo');	
	$criterio->delCriterio($c);
}
?>

