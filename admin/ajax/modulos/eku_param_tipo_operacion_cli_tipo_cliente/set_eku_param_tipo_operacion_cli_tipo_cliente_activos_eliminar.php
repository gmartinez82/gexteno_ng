<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuParamTipoOperacionCliTipoCliente::SES_CRITERIOS);

if($c == 'eku_param_tipo_operacion_cli_tipo_cliente.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_param_tipo_operacion_cli_tipo_cliente');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_param_tipo_operacion_cli_tipo_cliente');	
	$criterio->delCriterio($c);
}
?>

