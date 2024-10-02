<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CliCategoriaGralFpFormaPago::SES_CRITERIOS);

if($c == 'cli_categoria_gral_fp_forma_pago.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cli_categoria_gral_fp_forma_pago');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cli_categoria_gral_fp_forma_pago');	
	$criterio->delCriterio($c);
}
?>

