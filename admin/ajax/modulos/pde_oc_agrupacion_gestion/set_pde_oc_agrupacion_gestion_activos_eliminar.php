<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeOcAgrupacion::SES_CRITERIOS);
$criterio->addTabla('pde_oc_agrupacion');	
$criterio->delCriterio($c);
?>

