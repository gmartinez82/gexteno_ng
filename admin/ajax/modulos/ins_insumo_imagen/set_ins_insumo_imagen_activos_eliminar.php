<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsInsumoImagen::SES_CRITERIOS);

if($c == 'ins_insumo_imagen.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_insumo_imagen');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_insumo_imagen');	
	$criterio->delCriterio($c);
}
?>

