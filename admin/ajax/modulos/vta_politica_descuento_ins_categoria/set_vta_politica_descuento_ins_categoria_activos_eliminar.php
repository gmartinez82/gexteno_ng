<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaPoliticaDescuentoInsCategoria::SES_CRITERIOS);

if($c == 'vta_politica_descuento_ins_categoria.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_politica_descuento_ins_categoria');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_politica_descuento_ins_categoria');	
	$criterio->delCriterio($c);
}
?>

