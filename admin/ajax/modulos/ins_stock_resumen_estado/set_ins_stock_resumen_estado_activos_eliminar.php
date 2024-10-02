<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsStockResumenEstado::SES_CRITERIOS);

if($c == 'ins_stock_resumen_estado.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_stock_resumen_estado');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_stock_resumen_estado');	
	$criterio->delCriterio($c);
}
?>

