<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(OpeChoferUsUsuario::SES_CRITERIOS);

if($c == 'ope_chofer_us_usuario.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ope_chofer_us_usuario');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ope_chofer_us_usuario');	
	$criterio->delCriterio($c);
}
?>

