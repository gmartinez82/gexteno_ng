<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralTipoPersoneria::SES_CRITERIOS);

if($c == 'gral_tipo_personeria.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_tipo_personeria');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_tipo_personeria');	
	$criterio->delCriterio($c);
}
?>

