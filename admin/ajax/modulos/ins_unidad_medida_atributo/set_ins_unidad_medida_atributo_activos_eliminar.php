<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsUnidadMedidaAtributo::SES_CRITERIOS);

if($c == 'ins_unidad_medida_atributo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_unidad_medida_atributo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_unidad_medida_atributo');	
	$criterio->delCriterio($c);
}
?>

