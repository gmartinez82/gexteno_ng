<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralSucursalUsUsuario::SES_CRITERIOS);

if($c == 'gral_sucursal_us_usuario.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_sucursal_us_usuario');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_sucursal_us_usuario');	
	$criterio->delCriterio($c);
}
?>

