<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralCondicionIvaVtaTipoNotaCredito::SES_CRITERIOS);

if($c == 'gral_condicion_iva_vta_tipo_nota_credito.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_condicion_iva_vta_tipo_nota_credito');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_condicion_iva_vta_tipo_nota_credito');	
	$criterio->delCriterio($c);
}
?>

