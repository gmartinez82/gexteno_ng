<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuParamUnidadMedidaInsUnidadMedida::SES_CRITERIOS);

if($c == 'eku_param_unidad_medida_ins_unidad_medida.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_param_unidad_medida_ins_unidad_medida');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_param_unidad_medida_ins_unidad_medida');	
	$criterio->delCriterio($c);
}
?>

