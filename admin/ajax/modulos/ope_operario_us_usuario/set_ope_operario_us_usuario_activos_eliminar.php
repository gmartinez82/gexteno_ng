<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(OpeOperarioUsUsuario::SES_CRITERIOS);

if($c == 'ope_operario_us_usuario.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ope_operario_us_usuario');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ope_operario_us_usuario');	
	$criterio->delCriterio($c);
}
?>

