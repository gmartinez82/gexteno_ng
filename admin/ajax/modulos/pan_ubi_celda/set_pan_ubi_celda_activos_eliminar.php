<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PanUbiCelda::SES_CRITERIOS);

if($c == 'pan_ubi_celda.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pan_ubi_celda');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pan_ubi_celda');	
	$criterio->delCriterio($c);
}
?>

