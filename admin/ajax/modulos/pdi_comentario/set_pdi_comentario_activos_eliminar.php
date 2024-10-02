<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdiComentario::SES_CRITERIOS);

if($c == 'pdi_comentario.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pdi_comentario');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pdi_comentario');	
	$criterio->delCriterio($c);
}
?>

