<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CntbDiarioAsientoPdeNotaDebito::SES_CRITERIOS);

if($c == 'cntb_diario_asiento_pde_nota_debito.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cntb_diario_asiento_pde_nota_debito');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cntb_diario_asiento_pde_nota_debito');	
	$criterio->delCriterio($c);
}
?>

