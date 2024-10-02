<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(UsMemo::SES_CRITERIOS);

if($c == 'us_memo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('us_memo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('us_memo');	
	$criterio->delCriterio($c);
}
?>

