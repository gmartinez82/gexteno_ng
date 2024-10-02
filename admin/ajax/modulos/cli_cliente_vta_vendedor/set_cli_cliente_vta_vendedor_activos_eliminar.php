<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CliClienteVtaVendedor::SES_CRITERIOS);

if($c == 'cli_cliente_vta_vendedor.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cli_cliente_vta_vendedor');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cli_cliente_vta_vendedor');	
	$criterio->delCriterio($c);
}
?>

