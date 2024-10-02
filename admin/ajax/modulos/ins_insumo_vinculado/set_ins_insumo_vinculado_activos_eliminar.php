<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsInsumoVinculado::SES_CRITERIOS);

if($c == 'ins_insumo_vinculado.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_insumo_vinculado');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_insumo_vinculado');	
	$criterio->delCriterio($c);
}
?>

