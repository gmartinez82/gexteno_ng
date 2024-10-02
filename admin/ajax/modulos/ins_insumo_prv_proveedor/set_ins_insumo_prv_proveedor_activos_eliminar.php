<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsInsumoPrvProveedor::SES_CRITERIOS);

if($c == 'ins_insumo_prv_proveedor.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_insumo_prv_proveedor');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_insumo_prv_proveedor');	
	$criterio->delCriterio($c);
}
?>

