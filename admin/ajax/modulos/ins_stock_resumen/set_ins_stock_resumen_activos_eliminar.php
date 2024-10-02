<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsStockResumen::SES_CRITERIOS);

if($c == 'ins_stock_resumen.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_stock_resumen');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_stock_resumen');	
	$criterio->delCriterio($c);
}
?>

