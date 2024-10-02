<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PrvImportacionTipoEstado::SES_CRITERIOS);

if($c == 'prv_importacion_tipo_estado.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('prv_importacion_tipo_estado');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('prv_importacion_tipo_estado');	
	$criterio->delCriterio($c);
}
?>

