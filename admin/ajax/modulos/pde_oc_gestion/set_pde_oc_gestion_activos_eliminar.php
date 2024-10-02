<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeOc::SES_CRITERIOS);
$criterio->addTabla('pde_oc');	
$criterio->delCriterio($c);
?>

