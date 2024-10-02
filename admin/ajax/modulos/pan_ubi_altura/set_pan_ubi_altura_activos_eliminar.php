<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PanUbiAltura::SES_CRITERIOS);

if($c == 'pan_ubi_altura.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pan_ubi_altura');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pan_ubi_altura');	
	$criterio->delCriterio($c);
}
?>

