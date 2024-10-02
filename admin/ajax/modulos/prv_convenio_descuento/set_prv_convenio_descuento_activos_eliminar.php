<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PrvConvenioDescuento::SES_CRITERIOS);

if($c == 'prv_convenio_descuento.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('prv_convenio_descuento');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('prv_convenio_descuento');	
	$criterio->delCriterio($c);
}
?>

