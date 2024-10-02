<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsMarca::SES_CRITERIOS);

if($c == 'ins_marca.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_marca');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_marca');	
	$criterio->delCriterio($c);
}
?>

