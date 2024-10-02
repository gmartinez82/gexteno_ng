<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CntbTipoClasificacion::SES_CRITERIOS);

if($c == 'cntb_tipo_clasificacion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cntb_tipo_clasificacion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cntb_tipo_clasificacion');	
	$criterio->delCriterio($c);
}
?>

