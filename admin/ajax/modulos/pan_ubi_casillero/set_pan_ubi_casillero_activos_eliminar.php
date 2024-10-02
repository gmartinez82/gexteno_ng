<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PanUbiCasillero::SES_CRITERIOS);

if($c == 'pan_ubi_casillero.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pan_ubi_casillero');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pan_ubi_casillero');	
	$criterio->delCriterio($c);
}
?>

