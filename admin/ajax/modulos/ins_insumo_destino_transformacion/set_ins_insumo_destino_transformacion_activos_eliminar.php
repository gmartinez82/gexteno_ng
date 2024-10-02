<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsInsumoDestinoTransformacion::SES_CRITERIOS);

if($c == 'ins_insumo_destino_transformacion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_insumo_destino_transformacion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_insumo_destino_transformacion');	
	$criterio->delCriterio($c);
}
?>

