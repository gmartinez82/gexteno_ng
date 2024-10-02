<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaTipoVendedor::SES_CRITERIOS);

if($c == 'vta_tipo_vendedor.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_tipo_vendedor');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_tipo_vendedor');	
	$criterio->delCriterio($c);
}
?>

