<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(AltAlertaEnvioEmail::SES_CRITERIOS);

if($c == 'alt_alerta_envio_email.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('alt_alerta_envio_email');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('alt_alerta_envio_email');	
	$criterio->delCriterio($c);
}
?>

