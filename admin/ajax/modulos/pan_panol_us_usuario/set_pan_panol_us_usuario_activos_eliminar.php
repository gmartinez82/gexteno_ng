<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PanPanolUsUsuario::SES_CRITERIOS);

if($c == 'pan_panol_us_usuario.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pan_panol_us_usuario');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pan_panol_us_usuario');	
	$criterio->delCriterio($c);
}
?>

